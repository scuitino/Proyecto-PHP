<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	// array('label'=>'Listar Usuarios', 'url'=>array('index')),
	// array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->id), 'visible'=>Yii::app()->authManager->checkAccess("director",Yii::app()->user->id)||Yii::app()->authManager->checkAccess("empleado",Yii::app()->user->id)),
	array('label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible'=>Yii::app()->authManager->checkAccess("director",Yii::app()->user->id)||Yii::app()->authManager->checkAccess("empleado",Yii::app()->user->id)),
	//array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Ver Usuario:</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
		'profile',
	),
)); ?>
