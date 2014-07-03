<?php
/* @var $this InmuebleController */
/* @var $model Inmueble */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inmueble-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tituloInmueble'); ?>
		<?php echo $form->textField($model,'tituloInmueble',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tituloInmueble'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'descripcionInmueble'); ?>
		<?php echo $form->textField($model,'descripcionInmueble',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcionInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioInmueble'); ?>
		<?php echo $form->textField($model,'precioInmueble'); ?>
		<?php echo $form->error($model,'precioInmueble'); ?>
	</div>

	 <div class="row">
		<?php echo $form->labelEx($model,'destacadoInmueble'); ?>
		<?//php echo $form->textField($model,'destacadoInmueble'); ?>
		<?php echo $form->dropDownList($model, 'destacadoInmueble', array('1' => 'Destacado', '0' => 'No Destacado')); ?> 
		<?php echo $form->error($model,'destacadoInmueble'); ?>
	</div>

	
		<?php echo $form->labelEx($model,'estadoInmueble'); ?>
		<?//php echo $form->textField($model,'estadoInmueble'); ?>
		<?php echo $form->dropDownList($model, 'estadoInmueble', array('1' => 'Aprobado', '0' => 'Pendiente')); ?> 
		<?php echo $form->error($model,'estadoInmueble'); ?>
	

	<div class="row">
		<?php echo $form->labelEx($model,'habitacionesInmueble'); ?>
		<?php echo $form->textField($model,'habitacionesInmueble'); ?>
		<?php echo $form->error($model,'habitacionesInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'baniosInmuebles'); ?>
		<?php echo $form->textField($model,'baniosInmuebles'); ?>
		<?php echo $form->error($model,'baniosInmuebles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garageInmueble'); ?>
		<?php echo $form->textField($model,'garageInmueble'); ?>
		<?php echo $form->error($model,'garageInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cocinaInmueble'); ?>
		<?php echo $form->textField($model,'cocinaInmueble'); ?>
		<?php echo $form->error($model,'cocinaInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'superficieInmueble'); ?>
		<?php echo $form->textField($model,'superficieInmueble'); ?>
		<?php echo $form->error($model,'superficieInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Barrio_idBarrio'); ?>
		<?php echo $form->dropDownList($model,'Barrio_idBarrio', CHtml::listData(Barrio::model()->findAll(),'idBarrio','nombreBarrio')); ?>
		<?php echo $form->error($model,'Barrio_idBarrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_id'); ?>
		<?php echo $form->textField($model,'Usuario_id'); ?>
		<?php echo $form->error($model,'Usuario_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operacion'); ?>
		<?php echo ZHtml::enumDropDownList($model, 'operacion'); ?>
		<?php echo $form->error($model,'operacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoInmueble'); ?> 
		  <?php echo ZHtml::enumDropDownList($model, 'tipoInmueble'); ?>
		<?php echo $form->error($model,'tipoInmueble'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->