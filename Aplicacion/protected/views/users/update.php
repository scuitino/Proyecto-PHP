<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	// array('label'=>'Listar Usuarios', 'url'=>array('index')),
	// array('label'=>'Crear Usuario', 'url'=>array('create')),
	// array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->id)),
	// array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Actualizar Usuario:</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>