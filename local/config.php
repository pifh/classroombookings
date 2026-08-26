<?php
defined('BASEPATH') OR exit('No direct script access allowed');

return array(

	'config' => array(
		'base_url' => 'http://127.0.0.1:8765/',
		'log_threshold' => 1,
		'index_page' => 'index.php',
		'uri_protocol' => 'REQUEST_URI',
	),

	'database' => array(
		'hostname' => '127.0.0.1',
		'port' => '3306',
		'username' => 'crbs_dev',
		'password' => 'crbs_dev_pw',
		'database' => 'crbs_dev',
		'dbdriver' => 'mysqli',
	),

);
