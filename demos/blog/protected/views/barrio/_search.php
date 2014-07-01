<?php
/* @var $this BarrioController */
/* @var $model Barrio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idBarrio'); ?>
		<?php echo $form->textField($model,'idBarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreBarrio'); ?>
		<?php echo $form->textField($model,'nombreBarrio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->