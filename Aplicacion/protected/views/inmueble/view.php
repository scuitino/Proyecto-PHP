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
Yii::app()->clientScript->registerScript('calcula', "
$('.calculate').click(function(){
	document.getElementById('valorCuota').innerHTML = $model->precioInmueble/(document.getElementById('cuotas').value);
	return false;
});
");
?>
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
)); 

?>

    <?php $this->beginWidget(
    'bootstrap.widgets.TbModal',
    array('id' => 'myModal')
    ); ?>
     
    <div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Calcular Hipoteca</h4>
    </div>
     
    <div class="modal-body">
	    <?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'tituloInmueble',
			'precioInmueble',
		),
		)); ?>
		Cuotas: <input type="text" id="cuotas" /input>
		<br>
		Precio de cada cuota: <label id='valorCuota' value='0'></label>

    </div>
     
    <div class="modal-footer">
    <?php echo CHtml::link('Calcular','#',array('class'=>'calculate btn')); ?>
    <?php $this->widget(
    'bootstrap.widgets.TbButton',
    array(
    'label' => 'Cerrar',
    'url' => '#',
    'htmlOptions' => array('data-dismiss' => 'modal'),
    )
    ); ?>
    </div>
     
    <?php $this->endWidget(); ?>
    <?php $this->widget(
    'bootstrap.widgets.TbButton',
    array(
    'label' => 'Calculo de Hipoteca',
    'htmlOptions' => array(
    'data-toggle' => 'modal',
    'data-target' => '#myModal',
    ),
    )
    );?>
