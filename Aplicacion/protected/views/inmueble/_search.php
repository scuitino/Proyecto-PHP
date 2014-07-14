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
		<?php echo $form->label($model,'baniosInmuebles'); ?>
		<?php echo $form->textField($model,'baniosInmuebles'); ?>
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

<!-- 	<div class="row">
		<?php echo $form->label($model,'Barrio_idBarrio'); ?>
		<?php echo $form->textField($model,'Barrio_idBarrio'); ?>
	</div> -->
	<div class="row">
		<?php echo $form->labelEx($model,'Barrio_idBarrio'); ?>
		<?php echo $form->dropDownList($model,'Barrio_idBarrio', CHtml::listData(Barrio::model()->findAll(),'idBarrio','nombreBarrio')); ?>
		<?php echo $form->error($model,'Barrio_idBarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operacion'); ?>
		<?php echo ZHtml::enumDropDownList($model, 'operacion'); ?>
		<?php echo $form->error($model,'operacion'); ?>
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