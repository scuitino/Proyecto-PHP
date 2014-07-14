<?php
/* @var $this ContactoController */
/* @var $model Contacto */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	'Create',
);

$this->menu=array(
	// array('label'=>'List Contacto', 'url'=>array('index')),
	// array('label'=>'Manage Contacto', 'url'=>array('admin')),
);
?>

<h1>Contacto con la Inmobiliaria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>