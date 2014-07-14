<?php

class InmuebleController extends Controller
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
				'actions'=>array('view','index','busqueda','buscar'),

				'users'=>array('*'),
			),
			array('allow', 
				'actions'=>array('create','update','MisInmuebles'),
				'roles'=>array('registrado'),
			),
			array('allow',
				'actions'=>array('index','create','admin','delete','update'),
				'roles'=>array('empleado'),
			),

			array('allow',
				'actions'=>array('index','admin','delete','update','create','view'),
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
		$model=new Inmueble;
		$modelImage = new Imagen;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Inmueble'],$_POST['Imagen']))
		{
			$model->attributes=$_POST['Inmueble'];
			// $modelImage->Inmueble_idInmueble = $model->idInmueble;
			// $modelImage->portadaImagen = false;
			
			//$modelImage=CUploadedFile::getInstance($modelImage,'image');
   //                      $fileName = $uploadedFile;
   //                      $modelImage->urlImagen = $fileName;

			$uploadedFile=CUploadedFile::getInstance($modelImage,'image');
                        $fileName = $uploadedFile;
                        $model->Imagen_Id = $fileName->getname();

            $modelImage->urlImagen = '/images/'.$fileName;
            $modelImage->portadaImagen=0;
			if ((!(Yii::app()->authManager->checkAccess("director",Yii::app()->user->id)))||
					(!(Yii::app()->authManager->checkAccess("empleado",Yii::app()->user->id))))
			{
				$model->destacadoInmueble=0;
				$model->estadoInmueble=0;
			}
			$model->Usuario_id=Yii::app()->user->id;

		if($model->save()){
			$modelImage->Inmueble_idInmueble= $model->idInmueble;
			if ($modelImage->save()){			
				$model->Imagen_Id = $modelImage->idImagen;
				$model->save();
				$uploadedFile->saveAs('/var/www'.Yii::app()->baseUrl.'/images/'.$uploadedFile->getname(),true); 
				$this->redirect(array('view','id'=>$model->idInmueble));
			}
		}
	}

		$this->render('create',array(
			'model'=>$model,
			'modelImage'=>$modelImage,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$modelImage = new Imagen;
		$modelImage =  Imagen::model()->findByPK($model->Imagen_Id);
		$params["inmueble"]=$model;
			
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Inmueble']))
		{
			$model->attributes=$_POST['Inmueble']; 
			if ((Yii::app()->authManager->checkAccess("updateOwnUser",Yii::app()->user->id,$params)))
			{
			if($model->save())
				$this->redirect(array('view','id'=>$model->idInmueble));
			}
		}


		$this->render('update',array(
			'model'=>$model,
			'modelImage'=>$modelImage,
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
		$dataProvider=new CActiveDataProvider('Inmueble');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Inmueble('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Inmueble']))
			$model->attributes=$_GET['Inmueble'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

		public function actionBuscar()
	{
		$model=new Inmueble('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Inmueble']))
			$model->attributes=$_GET['Inmueble'];

		$this->render('buscar',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Inmueble the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Inmueble::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionMisInmuebles()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		//$dataProvider=new CActiveDataProvider('Inmueble');
		$UsuarioID=Yii::app()->user->id;
		$criteria = new CDbCriteria();
		$criteria->condition = 'Usuario_id=:UsuarioID';
		$criteria->params= array(':UsuarioID'=>$UsuarioID);
		$dataProvider=new CActiveDataProvider('Inmueble', array(
			  'criteria'=>$criteria,
    	));
		$this->render('MisInmuebles',array(
			'dataProvider'=>$dataProvider,
		));		

	}

	/**
	 * Búsqueda del usuario.
	 */

	/**
	 * Performs the AJAX validation.
	 * @param Inmueble $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='inmueble-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}

