<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Full application backup/restore: a single .zip containing a complete
 * SQL dump of the database plus a copy of the uploads/ directory.
 *
 * The dump format is intentionally simple and fully controlled by this
 * class at both ends (one complete SQL statement per line, embedded
 * newlines in data escaped to literal \n) so restore can just execute
 * each line, rather than needing a general-purpose SQL statement parser.
 *
 */
class DataBackup
{


	const BATCH_SIZE = 500;

	protected $CI;


	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->database();
	}


	/**
	 * Build a full backup zip and return its path.
	 *
	 */
	public function create_zip()
	{
		$dir = $this->backups_dir();

		$stamp = date('Y-m-d_His');
		$zip_path = $dir . 'backup-' . $stamp . '.zip';
		$sql_path = $dir . 'database-' . $stamp . '.sql';

		$this->write_sql_dump($sql_path);

		$zip = new ZipArchive();
		if ($zip->open($zip_path, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== TRUE) {
			@unlink($sql_path);
			throw new Exception('Could not create backup zip file.');
		}

		$zip->addFile($sql_path, 'database.sql');

		$uploads_dir = FCPATH . 'uploads';
		if (is_dir($uploads_dir)) {
			$this->add_dir_to_zip($zip, $uploads_dir, 'uploads');
		}

		$zip->close();

		@unlink($sql_path);

		return $zip_path;
	}


	/**
	 * Restore the database and uploads/ from a backup zip.
	 * Destructive: drops and recreates every table.
	 *
	 */
	public function restore_from_zip($zip_path)
	{
		$extract_dir = FCPATH . 'local/restore_' . uniqid() . '/';
		mkdir($extract_dir, 0755, TRUE);

		try {

			$zip = new ZipArchive();
			if ($zip->open($zip_path) !== TRUE) {
				throw new Exception('Could not open the uploaded backup file.');
			}
			$zip->extractTo($extract_dir);
			$zip->close();

			$sql_file = $extract_dir . 'database.sql';
			if ( ! is_file($sql_file)) {
				throw new Exception('This does not look like a valid backup file (database.sql is missing).');
			}

			$this->CI->db->query('SET FOREIGN_KEY_CHECKS=0');

			foreach ($this->CI->db->list_tables() as $table) {
				$this->CI->db->query("DROP TABLE IF EXISTS `{$table}`");
			}

			$fh = fopen($sql_file, 'r');
			while (($line = fgets($fh)) !== FALSE) {
				$line = trim($line);
				if ($line === '') continue;
				$this->CI->db->query($line);
			}
			fclose($fh);

			$this->CI->db->query('SET FOREIGN_KEY_CHECKS=1');

			$uploads_src = $extract_dir . 'uploads';
			if (is_dir($uploads_src)) {
				$this->copy_dir($uploads_src, FCPATH . 'uploads');
			}

		} finally {
			$this->remove_dir($extract_dir);
		}
	}


	public function backups_dir()
	{
		$dir = FCPATH . 'local/backups/';
		if ( ! is_dir($dir)) {
			mkdir($dir, 0755, TRUE);
		}
		return $dir;
	}


	private function write_sql_dump($path)
	{
		$fh = fopen($path, 'w');

		fwrite($fh, "SET FOREIGN_KEY_CHECKS=0;\n");

		foreach ($this->CI->db->list_tables() as $table) {

			fwrite($fh, "DROP TABLE IF EXISTS `{$table}`;\n");

			$create = $this->CI->db->query("SHOW CREATE TABLE `{$table}`")->row_array();
			$create_sql = $create['Create Table'] ?? '';
			$create_sql = str_replace(["\r\n", "\r", "\n"], ' ', $create_sql);
			fwrite($fh, $create_sql . ";\n");

			$this->write_table_data($fh, $table);
		}

		fwrite($fh, "SET FOREIGN_KEY_CHECKS=1;\n");

		fclose($fh);
	}


	private function write_table_data($fh, $table)
	{
		$total = (int) $this->CI->db->count_all($table);
		if ($total === 0) return;

		for ($offset = 0; $offset < $total; $offset += self::BATCH_SIZE) {

			$this->CI->db->reset_query();
			$this->CI->db->limit(self::BATCH_SIZE, $offset);
			$rows = $this->CI->db->get($table)->result_array();

			if (empty($rows)) continue;

			$columns = array_keys($rows[0]);
			$columns_sql = '`' . implode('`,`', $columns) . '`';

			$value_rows = [];
			foreach ($rows as $row) {
				$values = array_map([$this, 'sql_value'], array_values($row));
				$value_rows[] = '(' . implode(',', $values) . ')';
			}

			$sql = "INSERT INTO `{$table}` ({$columns_sql}) VALUES " . implode(',', $value_rows) . ';';
			fwrite($fh, $sql . "\n");
		}
	}


	private function sql_value($value)
	{
		if ($value === NULL) return 'NULL';

		$escaped = $this->CI->db->escape_str((string) $value);
		$escaped = str_replace(["\r\n", "\r", "\n"], '\\n', $escaped);

		return "'{$escaped}'";
	}


	private function add_dir_to_zip(ZipArchive $zip, $dir, $zip_path)
	{
		$items = scandir($dir);
		foreach ($items as $item) {
			if ($item === '.' || $item === '..') continue;

			$full_path = $dir . DIRECTORY_SEPARATOR . $item;
			$entry_path = $zip_path . '/' . $item;

			if (is_dir($full_path)) {
				$zip->addEmptyDir($entry_path);
				$this->add_dir_to_zip($zip, $full_path, $entry_path);
			} else {
				$zip->addFile($full_path, $entry_path);
			}
		}
	}


	private function copy_dir($src, $dest)
	{
		if ( ! is_dir($dest)) {
			mkdir($dest, 0755, TRUE);
		}

		$items = scandir($src);
		foreach ($items as $item) {
			if ($item === '.' || $item === '..') continue;

			$src_path = $src . DIRECTORY_SEPARATOR . $item;
			$dest_path = $dest . DIRECTORY_SEPARATOR . $item;

			if (is_dir($src_path)) {
				$this->copy_dir($src_path, $dest_path);
			} else {
				copy($src_path, $dest_path);
			}
		}
	}


	private function remove_dir($dir)
	{
		if ( ! is_dir($dir)) return;

		$items = scandir($dir);
		foreach ($items as $item) {
			if ($item === '.' || $item === '..') continue;

			$path = $dir . DIRECTORY_SEPARATOR . $item;

			if (is_dir($path)) {
				$this->remove_dir($path);
			} else {
				@unlink($path);
			}
		}

		@rmdir($dir);
	}


}
