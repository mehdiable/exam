<?php


namespace tutfw\controllers;


use tutfw\vendor\tutfw\base\Response;

class SiteController
{
	public function indexAction()
	{
		Response::success([
			'alias' => 'Mehdiable',
			'email' => 'mehdimn.mail@gmail.com',
			'gitgub' => 'https://github.com/mehdiable',
			'stackoverflow' => 'https://stackoverflow.com/users/3646840/mehdiable',
			'linkedin' => 'https://www.linkedin.com/in/mehdi-mohammadnejad/',
		], 'Welcome to tutfw framework ... ');
	}
}