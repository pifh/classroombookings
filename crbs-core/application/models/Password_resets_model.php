<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Password_resets_model extends CI_Model
{

	const TOKEN_TTL_SECONDS = 3600;


	public function __construct()
	{
		parent::__construct();
	}


	/**
	 * Create a new reset token for a user, invalidating any previous
	 * unused tokens for that user first.
	 *
	 * @param  int $user_id User ID
	 * @return  string The raw (unhashed) token to be sent by email.
	 *
	 */
	public function create_for_user($user_id)
	{
		$this->db->where('user_id', $user_id);
		$this->db->where('used_at', null);
		$this->db->delete('password_resets');

		$token = bin2hex(random_bytes(32));

		$data = [
			'user_id' => $user_id,
			'token_hash' => hash('sha256', $token),
			'created_at' => date('Y-m-d H:i:s'),
			'expires_at' => date('Y-m-d H:i:s', time() + self::TOKEN_TTL_SECONDS),
		];

		$this->db->insert('password_resets', $data);

		return $token;
	}


	/**
	 * Find a non-expired, unused reset row by its raw token.
	 *
	 * @param  string $token Raw token, as sent to the user by email.
	 * @return  mixed FALSE if not found/expired/used, DB row otherwise.
	 *
	 */
	public function find_valid($token)
	{
		if (empty($token)) {
			return FALSE;
		}

		$where = [
			'token_hash' => hash('sha256', $token),
			'used_at' => null,
		];

		$this->db->where($where);
		$this->db->where('expires_at >', date('Y-m-d H:i:s'));

		$query = $this->db->get('password_resets');

		if ($query->num_rows() === 1) {
			return $query->row();
		}

		return FALSE;
	}


	public function mark_used($reset_id)
	{
		$data = [
			'used_at' => date('Y-m-d H:i:s'),
		];

		return $this->db->update('password_resets', $data, ['reset_id' => $reset_id]);
	}


}
