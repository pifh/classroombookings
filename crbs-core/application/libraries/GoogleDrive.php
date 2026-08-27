<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Minimal wrapper around Google's OAuth2 and Drive v3 REST APIs, using raw
 * curl (no SDK/Composer dependency). Backups are stored in the special
 * "appDataFolder" space, which is hidden from the user's normal Drive view
 * and only readable/writable by this application (least-privilege scope).
 *
 */
class GoogleDrive
{


	const AUTH_URL = 'https://accounts.google.com/o/oauth2/v2/auth';
	const TOKEN_URL = 'https://oauth2.googleapis.com/token';
	const UPLOAD_URL = 'https://www.googleapis.com/upload/drive/v3/files';
	const FILES_URL = 'https://www.googleapis.com/drive/v3/files';
	const SCOPE = 'https://www.googleapis.com/auth/drive.appdata';


	public function get_auth_url($client_id, $redirect_uri)
	{
		$params = [
			'client_id' => $client_id,
			'redirect_uri' => $redirect_uri,
			'response_type' => 'code',
			'scope' => self::SCOPE,
			'access_type' => 'offline',
			'prompt' => 'consent',
		];

		return self::AUTH_URL . '?' . http_build_query($params);
	}


	public function exchange_code($client_id, $client_secret, $code, $redirect_uri)
	{
		return $this->http_request('POST', self::TOKEN_URL, [
			'headers' => ['Content-Type: application/x-www-form-urlencoded'],
			'body' => http_build_query([
				'code' => $code,
				'client_id' => $client_id,
				'client_secret' => $client_secret,
				'redirect_uri' => $redirect_uri,
				'grant_type' => 'authorization_code',
			]),
		]);
	}


	public function refresh_access_token($client_id, $client_secret, $refresh_token)
	{
		return $this->http_request('POST', self::TOKEN_URL, [
			'headers' => ['Content-Type: application/x-www-form-urlencoded'],
			'body' => http_build_query([
				'client_id' => $client_id,
				'client_secret' => $client_secret,
				'refresh_token' => $refresh_token,
				'grant_type' => 'refresh_token',
			]),
		]);
	}


	public function upload_file($access_token, $filepath, $filename)
	{
		$boundary = 'crbs' . uniqid();
		$metadata = json_encode(['name' => $filename, 'parents' => ['appDataFolder']]);
		$file_content = file_get_contents($filepath);

		if ($file_content === FALSE) {
			return ['success' => FALSE, 'error' => 'Could not read backup file.', 'http_code' => 0, 'body' => null];
		}

		$body = "--{$boundary}\r\n"
			. "Content-Type: application/json; charset=UTF-8\r\n\r\n"
			. $metadata . "\r\n"
			. "--{$boundary}\r\n"
			. "Content-Type: application/zip\r\n\r\n"
			. $file_content . "\r\n"
			. "--{$boundary}--";

		$headers = [
			'Authorization: Bearer ' . $access_token,
			'Content-Type: multipart/related; boundary=' . $boundary,
		];

		$url = self::UPLOAD_URL . '?uploadType=multipart&fields=' . urlencode('id,name,createdTime,size');

		return $this->http_request('POST', $url, [
			'headers' => $headers,
			'body' => $body,
		]);
	}


	public function list_files($access_token)
	{
		$url = self::FILES_URL . '?' . http_build_query([
			'spaces' => 'appDataFolder',
			'fields' => 'files(id,name,createdTime,size)',
			'orderBy' => 'createdTime desc',
			'pageSize' => 25,
		]);

		return $this->http_request('GET', $url, [
			'headers' => ['Authorization: Bearer ' . $access_token],
		]);
	}


	public function download_file($access_token, $file_id, $dest_path)
	{
		$url = self::FILES_URL . '/' . rawurlencode($file_id) . '?alt=media';

		$fp = fopen($dest_path, 'w');
		if ( ! $fp) {
			return ['success' => FALSE, 'error' => 'Could not open destination file for writing.'];
		}

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $access_token]);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_FILE, $fp);

		curl_exec($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$error = curl_error($ch);
		curl_close($ch);
		fclose($fp);

		if ($error || $http_code >= 400) {
			@unlink($dest_path);
			return ['success' => FALSE, 'error' => $error ?: "HTTP {$http_code}"];
		}

		return ['success' => TRUE];
	}


	private function http_request($method, $url, array $options = [])
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

		if (isset($options['headers'])) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $options['headers']);
		}

		if (isset($options['body'])) {
			curl_setopt($ch, CURLOPT_POSTFIELDS, $options['body']);
		}

		$response = curl_exec($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$error = curl_error($ch);
		curl_close($ch);

		if ($error) {
			return ['success' => FALSE, 'error' => $error, 'http_code' => 0, 'body' => null];
		}

		$decoded = json_decode((string) $response, TRUE);

		if ($http_code >= 400) {
			$msg = $decoded['error']['message']
				?? $decoded['error_description']
				?? "HTTP {$http_code}";
			return ['success' => FALSE, 'error' => $msg, 'http_code' => $http_code, 'body' => $decoded];
		}

		return ['success' => TRUE, 'error' => null, 'http_code' => $http_code, 'body' => $decoded];
	}


}
