<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();

		$this->require_logged_in();
		$this->require_permission(Permission::SETUP_SETTINGS);

		$this->load->library(['DataBackup', 'GoogleDrive']);

		$this->data['showtitle'] = lang('settings.backup');
	}


	public function index()
	{
		$this->data['title'] = lang('settings.backup');

		$this->data['drive_settings'] = $this->settings_model->get_all('google_drive');
		$this->data['drive_connected'] = ! empty($this->data['drive_settings']['refresh_token']);
		$this->data['redirect_uri'] = $this->drive_redirect_uri();

		$this->data['drive_files'] = [];
		if ($this->data['drive_connected']) {
			$this->data['drive_files'] = $this->list_drive_files();
		}

		$body = (string) $this->session->flashdata('saved');
		$body .= $this->load->view('settings/backup', $this->data, TRUE);

		$this->data['body'] = '<h2>' . lang('settings.backup') . '</h2>' . $body;

		return $this->render();
	}


	/**
	 * Download a fresh backup zip.
	 *
	 */
	public function download()
	{
		try {
			$zip_path = $this->databackup->create_zip();
		} catch (Throwable $e) {
			log_message('error', 'Backup::download() - ' . $e->getMessage());
			show_error(lang('settings.backup.error.create'));
			return;
		}

		$filename = 'classroombookings-backup-' . date('Y-m-d_His') . '.zip';

		header('Content-Type: application/zip');
		header('Content-Disposition: attachment; filename="' . $filename . '"');
		header('Content-Length: ' . filesize($zip_path));

		readfile($zip_path);

		@unlink($zip_path);

		exit;
	}


	/**
	 * Restore from an uploaded backup zip.
	 *
	 */
	public function restore()
	{
		$expected = setting('name') ?: 'CONFIRM';

		if ($this->input->post('confirm') !== $expected) {
			$this->session->set_flashdata('saved', msgbox('error', lang('settings.backup.restore.bad_confirmation')));
			redirect('settings/backup');
			return;
		}

		$upload_config = [
			'upload_path' => config_item('temp_path'),
			'allowed_types' => 'zip',
			'max_size' => 0,
			'encrypt_name' => TRUE,
		];

		$this->load->library('upload', $upload_config);

		if ( ! $this->upload->do_upload('backup_file')) {
			$this->session->set_flashdata('saved', msgbox('error', $this->upload->display_errors('', '')));
			redirect('settings/backup');
			return;
		}

		$upload_data = $this->upload->data();
		$uploaded_path = $upload_data['full_path'];

		$this->run_restore($uploaded_path);

		@unlink($uploaded_path);

		redirect('settings/backup');
	}


	/**
	 * Save Google Drive OAuth app credentials (Client ID/Secret).
	 *
	 */
	public function drive_save_credentials()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('client_id', 'lang:settings.backup.drive.client_id', 'required');
		$this->form_validation->set_rules('client_secret', 'lang:settings.backup.drive.client_secret', 'required');

		if ($this->form_validation->run() !== FALSE) {
			$this->settings_model->set([
				'client_id' => $this->input->post('client_id'),
				'client_secret' => $this->input->post('client_secret'),
			], 'google_drive');

			$this->session->set_flashdata('saved', msgbox('info', lang('settings.backup.drive.save.success')));
		}

		redirect('settings/backup');
	}


	/**
	 * Start the Google OAuth flow.
	 *
	 */
	public function drive_connect()
	{
		$client_id = $this->settings_model->get('client_id', 'google_drive');

		if (empty($client_id)) {
			$this->session->set_flashdata('saved', msgbox('error', lang('settings.backup.drive.error.no_credentials')));
			redirect('settings/backup');
			return;
		}

		redirect($this->googledrive->get_auth_url($client_id, $this->drive_redirect_uri()));
	}


	/**
	 * Google's OAuth callback: exchange the code for tokens.
	 *
	 */
	public function drive_callback()
	{
		$code = $this->input->get('code');
		$error = $this->input->get('error');

		if (!empty($error) || empty($code)) {
			$this->session->set_flashdata('saved', msgbox('error', lang('settings.backup.drive.error.auth_failed')));
			redirect('settings/backup');
			return;
		}

		$client_id = $this->settings_model->get('client_id', 'google_drive');
		$client_secret = $this->settings_model->get('client_secret', 'google_drive');

		$result = $this->googledrive->exchange_code($client_id, $client_secret, $code, $this->drive_redirect_uri());

		if ( ! $result['success']) {
			log_message('error', 'GoogleDrive::exchange_code() - ' . $result['error']);
			$this->session->set_flashdata('saved', msgbox('error', lang('settings.backup.drive.error.auth_failed') . ' (' . html_escape($result['error']) . ')'));
			redirect('settings/backup');
			return;
		}

		$body = $result['body'];

		$settings = [
			'access_token' => $body['access_token'] ?? '',
			'access_token_expires' => time() + (int) ($body['expires_in'] ?? 0),
		];
		if ( ! empty($body['refresh_token'])) {
			$settings['refresh_token'] = $body['refresh_token'];
		}

		$this->settings_model->set($settings, 'google_drive');

		$this->session->set_flashdata('saved', msgbox('info', lang('settings.backup.drive.connect.success')));
		redirect('settings/backup');
	}


	/**
	 * Forget the stored Google Drive connection.
	 *
	 */
	public function drive_disconnect()
	{
		$this->settings_model->set([
			'refresh_token' => '',
			'access_token' => '',
			'access_token_expires' => 0,
		], 'google_drive');

		$this->session->set_flashdata('saved', msgbox('info', lang('settings.backup.drive.disconnect.success')));
		redirect('settings/backup');
	}


	/**
	 * Create a backup and push it to Google Drive now.
	 *
	 */
	public function drive_backup_now()
	{
		$access_token = $this->valid_drive_access_token();

		if ( ! $access_token) {
			$this->session->set_flashdata('saved', msgbox('error', lang('settings.backup.drive.error.not_connected')));
			redirect('settings/backup');
			return;
		}

		try {
			$zip_path = $this->databackup->create_zip();
		} catch (Throwable $e) {
			log_message('error', 'Backup::drive_backup_now() - ' . $e->getMessage());
			$this->session->set_flashdata('saved', msgbox('error', lang('settings.backup.error.create')));
			redirect('settings/backup');
			return;
		}

		$filename = basename($zip_path);
		$result = $this->googledrive->upload_file($access_token, $zip_path, $filename);

		@unlink($zip_path);

		if ( ! $result['success']) {
			log_message('error', 'GoogleDrive::upload_file() - ' . $result['error']);
			$this->session->set_flashdata('saved', msgbox('error', lang('settings.backup.drive.error.upload') . ' (' . html_escape($result['error']) . ')'));
			redirect('settings/backup');
			return;
		}

		$this->session->set_flashdata('saved', msgbox('info', lang('settings.backup.drive.upload.success')));
		redirect('settings/backup');
	}


	/**
	 * Download a chosen backup from Drive and restore it.
	 *
	 */
	public function drive_restore()
	{
		$expected = setting('name') ?: 'CONFIRM';

		if ($this->input->post('confirm') !== $expected) {
			$this->session->set_flashdata('saved', msgbox('error', lang('settings.backup.restore.bad_confirmation')));
			redirect('settings/backup');
			return;
		}

		$file_id = $this->input->post('file_id');
		$access_token = $this->valid_drive_access_token();

		if ( ! $access_token || empty($file_id)) {
			$this->session->set_flashdata('saved', msgbox('error', lang('settings.backup.drive.error.not_connected')));
			redirect('settings/backup');
			return;
		}

		$dest_path = $this->databackup->backups_dir() . 'drive-download-' . uniqid() . '.zip';
		$result = $this->googledrive->download_file($access_token, $file_id, $dest_path);

		if ( ! $result['success']) {
			log_message('error', 'GoogleDrive::download_file() - ' . $result['error']);
			$this->session->set_flashdata('saved', msgbox('error', lang('settings.backup.drive.error.download') . ' (' . html_escape($result['error']) . ')'));
			redirect('settings/backup');
			return;
		}

		$this->run_restore($dest_path);

		@unlink($dest_path);

		redirect('settings/backup');
	}


	/**
	 * Take a safety snapshot of the current state, then perform the
	 * destructive restore from the given zip path.
	 *
	 */
	private function run_restore($zip_path)
	{
		try {
			$this->databackup->create_zip();
		} catch (Throwable $e) {
			log_message('error', 'Backup::run_restore() - pre-restore snapshot failed: ' . $e->getMessage());
		}

		try {
			$this->databackup->restore_from_zip($zip_path);
			$this->session->set_flashdata('saved', msgbox('info', lang('settings.backup.restore.success')));
		} catch (Throwable $e) {
			log_message('error', 'Backup::restore_from_zip() - ' . $e->getMessage());
			$this->session->set_flashdata('saved', msgbox('error', lang('settings.backup.restore.error') . ' (' . html_escape($e->getMessage()) . ')'));
		}
	}


	/**
	 * Get a currently-valid Drive access token, refreshing it first if needed.
	 * Returns null if not connected or refresh fails.
	 *
	 */
	private function valid_drive_access_token()
	{
		$settings = $this->settings_model->get_all('google_drive');

		if (empty($settings['refresh_token'])) return null;

		$expires = (int) ($settings['access_token_expires'] ?? 0);

		if ( ! empty($settings['access_token']) && $expires > (time() + 60)) {
			return $settings['access_token'];
		}

		$result = $this->googledrive->refresh_access_token(
			$settings['client_id'] ?? '',
			$settings['client_secret'] ?? '',
			$settings['refresh_token']
		);

		if ( ! $result['success']) {
			log_message('error', 'GoogleDrive::refresh_access_token() - ' . $result['error']);
			return null;
		}

		$access_token = $result['body']['access_token'] ?? null;
		if (empty($access_token)) return null;

		$this->settings_model->set([
			'access_token' => $access_token,
			'access_token_expires' => time() + (int) ($result['body']['expires_in'] ?? 0),
		], 'google_drive');

		return $access_token;
	}


	private function list_drive_files()
	{
		$access_token = $this->valid_drive_access_token();
		if ( ! $access_token) return [];

		$result = $this->googledrive->list_files($access_token);
		if ( ! $result['success']) return [];

		return $result['body']['files'] ?? [];
	}


	private function drive_redirect_uri()
	{
		return site_url('settings/backup/drive_callback');
	}


}
