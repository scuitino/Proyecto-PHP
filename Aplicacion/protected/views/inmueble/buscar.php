<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
		<?php echo $form->label($model,'tituloInmueble'); ?>
		<?php echo $form->textField($model,'tituloInmueble',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionInmueble'); ?>
		<?php echo $form->textField($model,'descripcionInmueble',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precioInmueble'); ?>
		<?php echo $form->textField($model,'precioInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'habitacionesInmueble'); ?>
		<?php echo $form->textField($model,'habitacionesInmueble'); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'superficieInmueble'); ?>
		<?php echo $form->textField($model,'superficieInmueble'); ?>
	</div>

<!-- 	<div class="row">
		<?php echo $form->label($model,'Barrio_idBarrio'); ?>
		<?php echo $form->textField($model,'Barrio_idBarrio'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'Barrio'); ?>
		<?php echo $form->dropDownList($model,'Barrio_idBarrio', CHtml::listData(Barrio::model()->findAll(),'idBarrio','nombreBarrio')); ?>
		<?php echo $form->error($model,'Barrio_idBarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operacion'); ?>
		<?php echo ZHtml::enumDropDownList($model, 'operacion'); ?>
		<?php echo $form->error($model,'operacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inmueble-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'idInmueble',
		'tituloInmueble',
		'descripcionInmueble',
		'precioInmueble',
		'destacadoInmueble',
		'estadoInmueble',
		'operacion',
		/*
		'habitacionesInmueble',
		'baniosInmuebles',
		'garageInmueble',
		'cocinaInmueble',
		'superficieInmueble',
		'Barrio_idBarrio',

		'Usuario_id',
		*/
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>