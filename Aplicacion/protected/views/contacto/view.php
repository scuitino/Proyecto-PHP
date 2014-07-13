<?php
/* @var $this ContactoController */
/* @var $model Contacto */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	$model->id_Contacto,
);

$this->menu=array(
	array('label'=>'List Contacto', 'url'=>array('index')),
	array('label'=>'Create Contacto', 'url'=>array('create')),
	array('label'=>'Update Contacto', 'url'=>array('update', 'id'=>$model->id_Contacto)),
	array('label'=>'Delete Contacto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Contacto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contacto', 'url'=>array('admin')),
);
?>

<h1>View Contacto #<?php echo $model->id_Contacto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Contacto',
		'nombre',
		'email',
		'mensaje',
	),
)); ?>
