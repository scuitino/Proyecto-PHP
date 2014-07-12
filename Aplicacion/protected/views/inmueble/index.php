<?php
/* @var $this InmuebleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inmuebles',
);

$this->menu=array(
	array('label'=>'Crear Inmueble', 'url'=>array('create')),
	array('label'=>'Administrar Inmuebles', 'url'=>array('admin'), 'visible'=>Yii::app()->authManager->checkAccess("empleado",Yii::app()->user->id)||Yii::app()->authManager->checkAccess("director",Yii::app()->user->id),	),
);
?>

<h1>Inmuebles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
