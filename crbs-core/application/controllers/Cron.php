<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Entry point for scheduled (cron) tasks. CLI-only: refuses to run over HTTP
 * so it can't be triggered or discovered by a web request.
 *
 */
class Cron extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();

		if ( ! is_cli()) {
			show_404();
		}
	}


	/**
	 * Create a full backup (database + uploads), push it to Google Drive if
	 * connected, and prune old local backups. Meant to be run daily via cron:
	 *
	 *   php index.php cron backup
	 *
	 */
	public function backup()
	{
		$this->load->library(['DataBackup', 'GoogleDrive']);

		try {
			$zip_path = $this->databackup->create_zip();
		} catch (Throwable $e) {
			log_message('error', 'Cron::backup() - ' . $e->getMessage());
			fwrite(STDERR, 'Backup failed: ' . $e->getMessage() . "\n");
			exit(1);
		}

		echo 'Backup created: ' . basename($zip_path) . "\n";

		$this->push_to_drive($zip_path);
		$this->prune_local_backups();
	}


	private function push_to_drive($zip_path)
	{
		$settings = $this->settings_model->get_all('google_drive');

		if (empty($settings['refresh_token'])) {
			echo "Google Drive not connected, skipping cloud upload.\n";
			return;
		}

		$access_token = $this->valid_drive_access_token($settings);

		if ( ! $access_token) {
			log_message('error', 'Cron::backup() - could not obtain a valid Google Drive access token.');
			fwrite(STDERR, "Google Drive: could not refresh the access token, skipping cloud upload.\n");
			return;
		}

		$result = $this->googledrive->upload_file($access_token, $zip_path, basename($zip_path));

		if ( ! $result['success']) {
			log_message('error', 'Cron::backup() - GoogleDrive::upload_file() - ' . $result['error']);
			fwrite(STDERR, 'Google Drive upload failed: ' . $result['error'] . "\n");
			return;
		}

		echo 'Uploaded to Google Drive: ' . basename($zip_path) . "\n";
	}


	private function valid_drive_access_token(array $settings)
	{
		$expires = (int) ($settings['access_token_expires'] ?? 0);

		if ( ! empty($settings['access_token']) && $expires > (time() + 60)) {
			return $settings['access_token'];
		}

		$result = $this->googledrive->refresh_access_token(
			$settings['client_id'] ?? '',
			$settings['client_secret'] ?? '',
			$settings['refresh_token']
		);

		if ( ! $result['success']) return null;

		$access_token = $result['body']['access_token'] ?? null;
		if (empty($access_token)) return null;

		$this->settings_model->set([
			'access_token' => $access_token,
			'access_token_expires' => time() + (int) ($result['body']['expires_in'] ?? 0),
		], 'google_drive');

		return $access_token;
	}


	/**
	 * Keep only the N most recent local backup zips (local/backups/ is also
	 * where the pre-restore safety snapshot is written, so this caps that
	 * folder's growth too).
	 *
	 */
	private function prune_local_backups($keep = 7)
	{
		$dir = $this->databackup->backups_dir();
		$files = glob($dir . 'backup-*.zip');

		if ($files === false || count($files) <= $keep) return;

		usort($files, function ($a, $b) {
			return filemtime($a) <=> filemtime($b);
		});

		$to_delete = array_slice($files, 0, count($files) - $keep);

		foreach ($to_delete as $file) {
			@unlink($file);
			echo 'Pruned old local backup: ' . basename($file) . "\n";
		}
	}


}
