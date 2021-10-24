<?php


namespace tutfw\controllers;


//use MongoDB\BSON\ObjectId;
//use tutfw\models\TestModel;
use tutfw\vendor\tutfw\base\Response;

class SiteController
{
	public function indexAction()
	{
//		$v = new TestModel();
		
//		$result = $v->insertOne([
//			'title' => 'Insert first document 2',
//			'created_at' => date('U'),
//		]);
		
//		$result = $v->updateOne([
//			'_id' => new ObjectId('')
//		], ['$set' => ['title' => 'update title', 'updated_at' => date('U')]]);
		
//		$result = $v->findOne(['_id' => new ObjectId('61757e527e73b55da16fecb4')]);

//		$result = $v->find(['_id' => new ObjectId('')]);
//		foreach ($result as $doc) {
//			var_dump($doc);
//		}
		
//		$result = $v->deleteOne(['_id' => new ObjectId('')]);
		
		Response::success([
			'alias' => 'Mehdiable',
			'email' => 'mehdimn.mail@gmail.com',
			'gitgub' => 'https://github.com/mehdiable',
			'stackoverflow' => 'https://stackoverflow.com/users/3646840/mehdiable',
			'linkedin' => 'https://www.linkedin.com/in/mehdi-mohammadnejad/',
		], 'Welcome to tutfw framework ... ');
	}
}