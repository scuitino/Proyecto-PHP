<?php
/* @var $this ContactoController */
/* @var $model Contacto */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	$model->id_Contacto=>array('view','id'=>$model->id_Contacto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contacto', 'url'=>array('index')),
	array('label'=>'Create Contacto', 'url'=>array('create')),
	array('label'=>'View Contacto', 'url'=>array('view', 'id'=>$model->id_Contacto)),
	array('label'=>'Manage Contacto', 'url'=>array('admin')),
);
?>

<h1>Update Contacto <?php echo $model->id_Contacto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>