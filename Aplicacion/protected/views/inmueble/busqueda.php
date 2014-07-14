<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Búsqueda',
);

$this->menu=array(
	// array('label'=>'Listar Inmuebles', 'url'=>array('index')),
	// array('label'=>'Crear Inmueble', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inmueble-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar Inmuebles</h1>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inmueble-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'idInmueble',
		'tituloInmueble',
		'descripcionInmueble',
		'precioInmueble',
		// 'destacadoInmueble',
		'estadoInmueble',
		'habitacionesInmueble',
		'baniosInmuebles',
		'garageInmueble',
		'cocinaInmueble',
		'superficieInmueble',
		// 'Barrio_idBarrio',
		// 'Usuario_id',
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>
