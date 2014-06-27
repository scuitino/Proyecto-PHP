<?php
/* @var $this BarrioController */
/* @var $model Barrio */

$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	$model->idBarrio=>array('view','id'=>$model->idBarrio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Barrio', 'url'=>array('index')),
	array('label'=>'Create Barrio', 'url'=>array('create')),
	array('label'=>'View Barrio', 'url'=>array('view', 'id'=>$model->idBarrio)),
	array('label'=>'Manage Barrio', 'url'=>array('admin')),
);
?>

<h1>Update Barrio <?php echo $model->idBarrio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>