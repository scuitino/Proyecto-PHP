<?php
/* @var $this EventoController */
/* @var $model Evento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEvento'); ?>
		<?php echo $form->textField($model,'idEvento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Inmueble_idInmueble'); ?>
		<?php echo $form->textField($model,'Inmueble_idInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaEvento'); ?>
		<?php echo $form->textField($model,'fechaEvento',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionEvento'); ?>
		<?php echo $form->textField($model,'descripcionEvento',array('size'=>45,'maxlength'=>45)); ?>
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