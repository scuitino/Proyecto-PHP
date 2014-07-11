<?php
/* @var $this ImagenController */
/* @var $model Imagen */

$this->breadcrumbs=array(
	'Imagens'=>array('index'),
	$model->idImagen,
);

$this->menu=array(
	array('label'=>'List Imagen', 'url'=>array('index')),
	array('label'=>'Create Imagen', 'url'=>array('create')),
	array('label'=>'Update Imagen', 'url'=>array('update', 'id'=>$model->idImagen)),
	array('label'=>'Delete Imagen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idImagen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Imagen', 'url'=>array('admin')),
);
?>

<h1>View Imagen #<?php echo $model->idImagen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idImagen',
		'urlImagen',
		'Inmueble_idInmueble',
		'portadaImagen',
	),
)); ?>
