<?php
require_once(__DIR__ . '/../vendor/autoload.php');
$config = include_once(__DIR__ . '/../conf/config.php');

// comment below line on production
define('debug', true);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
//header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE,PATCH,OPTIONS,CONNECT,HEAD');
//header('X-Content-Type-Options: nosniff');
//header('X-XSS-Protection: 1; mode=block');
//header('X-Frame-Options: SAMEORIGIN');
//header('Pragma: no-cache');
//header('Cache-Control: no-cache');

try {
	\tutfw\TutFw::run($config);
} catch (Exception $exception) {
	var_dump($exception->getMessage());
	exit('end');
}
