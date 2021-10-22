<?php

require(__DIR__ . '/../vendor/autoload.php');
$config = include(__DIR__ . '/../conf/config.php');

\tutfw\base\TutFw::run($config);