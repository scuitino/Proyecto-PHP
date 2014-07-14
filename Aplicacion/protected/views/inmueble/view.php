<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->idInmueble,
);

$this->menu=array(
	//array('label'=>'Listar Inmuebles', 'url'=>array('index'), 'visible'=>Yii::app()->authManager->checkAccess(!"empleado",Yii::app()->user->id)),
	//array('label'=>'Crear Inmueble', 'url'=>array('create'), 'visible'=>Yii::app()->authManager->checkAccess(!"empleado",Yii::app()->user->id) ),
	//array('label'=>'Actualizar Inmueble', 'url'=>array('update', 'id'=>$model->idInmueble)),
	//array('label'=>'Borrar Inmueble', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idInmueble),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Administrar Inmueble', 'url'=>array('admin')),
);
?>

<h1>Ver Inmueble:</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idInmueble',
		'tituloInmueble',
		'descripcionInmueble',
		'precioInmueble',
		//'destacadoInmueble',
		//'estadoInmueble',
		'habitacionesInmueble',
		'baniosInmuebles',
		'garageInmueble',
		'cocinaInmueble',
		'superficieInmueble',
		'Barrio_idBarrio',
		'Usuario_id',
	),
)); ?>
