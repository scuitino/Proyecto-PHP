<?php
/* @var $this ImagenController */
/* @var $model Imagen */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idImagen'); ?>
		<?php echo $form->textField($model,'idImagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'urlImagen'); ?>
		<?php echo $form->textField($model,'urlImagen',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Inmueble_idInmueble'); ?>
		<?php echo $form->textField($model,'Inmueble_idInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'portadaImagen'); ?>
		<?php echo $form->textField($model,'portadaImagen'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->