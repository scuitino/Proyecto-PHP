<?php
/* @var $this ContactoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contactos',
);

$this->menu=array(
	// array('label'=>'Create Contacto', 'url'=>array('create')),
	// array('label'=>'Manage Contacto', 'url'=>array('admin')),
);
?>

<h1>Mensajes de Clientes:</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
