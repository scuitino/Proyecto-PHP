<?php
/* @var $this BarrioController */
/* @var $model Barrio */

$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Barrio', 'url'=>array('index')),
	array('label'=>'Manage Barrio', 'url'=>array('admin')),
);
?>

<h1>Create Barrio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>