#!/usr/local/bin/php
<?php

require(__DIR__ . '/vendor/autoload.php');

if (!isset($argv[1])) {
	echo "Argument is not enough\n";
} else {
    $command = $argv[1];
    unset($argv[0], $argv[1]);
	new \tutfw\base\Job($command, $argv);
}
