<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->idInmueble,
);

$this->menu=array(
	array('label'=>'List Inmueble', 'url'=>array('index')),
	array('label'=>'Create Inmueble', 'url'=>array('create')),
	array('label'=>'Update Inmueble', 'url'=>array('update', 'id'=>$model->idInmueble)),
	array('label'=>'Delete Inmueble', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idInmueble),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inmueble', 'url'=>array('admin')),
);
?>

<h1>View Inmueble #<?php echo $model->idInmueble; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idInmueble',
		'tituloInmueble',
		'descripcionInmueble',
		'precioInmueble',
		'destacadoInmueble',
		'estadoInmueble',
		'habitacionesInmueble',
		'bañosInmuebles',
		'garageInmueble',
		'cocinaInmueble',
		'superficieInmueble',
		'Inmueblecol',
		'Barrio_idBarrio',
		'Usuario_id',
	),
)); ?>
