<?php

class RolController extends Controller
{
	public function actionCreate()
	{
		
		$auth=Yii::app()->authManager;

		$auth->createOperation('createPost','create a post');
		$auth->createOperation('readPost','read a post');
		$auth->createOperation('updatePost','update a post');
		$auth->createOperation('deletePost','delete a post');
		 
		$bizRule='return Yii::app()->user->id==$params["post"]->authID;';
		$task=$auth->createTask('updateOwnPost','update a post by author himself',$bizRule);
		$task->addChild('updatePost');
		 
		$role=$auth->createRole('reader');
		$role->addChild('readPost');
		 
		$role=$auth->createRole('author');
		$role->addChild('reader');
		$role->addChild('createPost');
		$role->addChild('updateOwnPost');
		 
		$role=$auth->createRole('editor');
		$role->addChild('reader');
		$role->addChild('updatePost');
		 
		$role=$auth->createRole('admin');
		$role->addChild('editor');
		$role->addChild('author');
		$role->addChild('deletePost');
		$auth->assign('reader','readerA');
		$auth->assign('author','authorB');
		$auth->assign('editor','editorC');
		$auth->assign('admin','adminD');
		$auth->assign('author','demo');

		$this->render('create');

		//return Yii::app()->user->id==$params["post"]->author_id;
		
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}