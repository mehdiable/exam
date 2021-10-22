<?php

require(__DIR__ . '/../vendor/autoload.php');
$config = include(__DIR__ . '/../conf/config.php');

(new \tutfw\base\TutFw($config))->run();