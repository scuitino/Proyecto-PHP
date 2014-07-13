
<?php

class UsersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  
				'actions'=>array('create','index'),
				'users'=>array('*'),
			),
			array('allow', 
				'actions'=>array('update'),
				'roles'=>array('registrado'),
			),
			array('allow',
				'actions'=>array('index','admin','delete','update'),
				'roles'=>array('empleado'),
			),

			array('allow',
				'actions'=>array('index','admin','delete','update','create','view','empleado','ListarEmpleados'),
				'roles'=>array('director'),
			),

			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{

			$model->attributes=$_POST['Users'];
			if($model->save()){
               
               //aca creo el rol
				//Yii::app()->authManager->createRole("registrado");
				//Yii::app()->authManager->createRole("empleado");
				//Yii::app()->authManager->createRole("director");

				//Asigno rol

				Yii::app()->authManager->assign("registrado",$model->id);
				//Yii::app()->authManager->assign("empleado",$model->id);
				//Yii::app()->authManager->assign("director",$model->id);

				$this->redirect(array('view','id'=>$model->id));

             }
             
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

		public function actionListarEmpleados()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		//$dataProvider=new CActiveDataProvider('Inmueble');
		$UsuarioID=Yii::app()->user->id;
		$criteria = new CDbCriteria();
		$criteria->condition = 'Yii::app()->authManager->checkAccess("empleado",Yii::app()->user->id)';
		//$criteria->params= array(':UsuarioID'=>$UsuarioID);
		$dataProvider=new CActiveDataProvider('Users', array(
			  'criteria'=>$criteria,
    
));
		$this->render('ListarEmpleados',array(
			'dataProvider'=>$dataProvider,
		));		
}

	public function actionEmpleado()
{
    $model=new Users('register');

    // uncomment the following code to enable ajax-based validation
    /*
    if(isset($_POST['ajax']) && $_POST['ajax']==='users-empleado-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }
    */

    if(isset($_POST['Users']))
    {
        $model->attributes=$_POST['Users'];
        if($model->save()){
               
				Yii::app()->authManager->assign("empleado",$model->id);
				

				$this->redirect(array('view','id'=>$model->id));

             }
    }
    $this->render('empleado',array('model'=>$model));
}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$params["user"]=$model;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))

		{
			if (Yii::app()->authManager->checkAccess("updateOwnUser",Yii::app()->user->id,$params)){
			//$model->attributes=$_POST['Users'];

			
			

			//Acá se podría el OR para agregar el acceso también al director.
			
				

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		
			}else{

				throw new CHttpException(500,'You are not authorized to perform this action');
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		 //Yii::app()->authManager->createRole("cliente");
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}



	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
