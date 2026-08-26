<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_password_resets_table extends CI_Migration
{

	public function up()
	{
		$sql = "CREATE TABLE `password_resets` (
			`reset_id` int unsigned NOT NULL AUTO_INCREMENT,
			`user_id` int unsigned NOT NULL,
			`token_hash` char(64) COLLATE utf8mb4_unicode_ci NOT NULL,
			`created_at` datetime NOT NULL,
			`expires_at` datetime NOT NULL,
			`used_at` datetime DEFAULT NULL,
			PRIMARY KEY (`reset_id`),
			UNIQUE KEY `uniq_token_hash` (`token_hash`),
			KEY `fk_password_resets_user` (`user_id`),
			CONSTRAINT `fk_password_resets_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

		$this->db->query($sql);
	}



	public function down()
	{
	}


}
