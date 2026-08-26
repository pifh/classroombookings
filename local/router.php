<?php
// Router script for `php -S`, mimicking the .htaccess rewrite rule
// (front-controller pattern) so pretty URLs work without Apache.

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$docroot = dirname(__DIR__);

if ($uri !== '/' && file_exists($docroot . $uri) && is_file($docroot . $uri)) {
	return false;
}

chdir($docroot);
require $docroot . '/index.php';
