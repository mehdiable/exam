<?php

require(__DIR__ . '/../vendor/autoload.php');
$config = include(__DIR__ . '/../conf/config.php');

// comment below line on production
define('debug', true);

\tutfw\base\TutFw::run($config);