<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return [
	'id' => 'pt.st',
	'name' => 'Programming Turorial',
	'version' => '1.0',
	'default_controller' => 'site',
	'params' => [
//		params key-value
	],
	'urlManager' => [
		'class' => 'tutfw\base\UrlManager',
		'default_url' => '',
		'rules' => [
//			'[regular_expression_rules]' => '<route>',
			'[|/]' => 'site/index',
			'exam' => 'exam/index',
		]
	],
];
