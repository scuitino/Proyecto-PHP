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
		<?php echo $form->label($model,'idInmueble'); ?>
		<?php echo $form->textField($model,'idInmueble'); ?>
	</div>

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
		<?php echo $form->label($model,'destacadoInmueble'); ?>
		<?php echo $form->textField($model,'destacadoInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoInmueble'); ?>
		<?php echo $form->textField($model,'estadoInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'habitacionesInmueble'); ?>
		<?php echo $form->textField($model,'habitacionesInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bañosInmuebles'); ?>
		<?php echo $form->textField($model,'bañosInmuebles'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garageInmueble'); ?>
		<?php echo $form->textField($model,'garageInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cocinaInmueble'); ?>
		<?php echo $form->textField($model,'cocinaInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'superficieInmueble'); ?>
		<?php echo $form->textField($model,'superficieInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Inmueblecol'); ?>
		<?php echo $form->textField($model,'Inmueblecol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Barrio_idBarrio'); ?>
		<?php echo $form->textField($model,'Barrio_idBarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuario_id'); ?>
		<?php echo $form->textField($model,'Usuario_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->