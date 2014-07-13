<?php
/* @var $this EventoController */
/* @var $model Evento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evento-nuevoEvento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Inmueble_idInmueble'); ?>
		<?php echo $form->textField($model,'Inmueble_idInmueble'); ?>
		<?php echo $form->error($model,'Inmueble_idInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaEvento'); ?>
		<?php
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
		"attribute"=>"fechaEvento",
		"model"=>$model,
		"language"=>"es",
		"options"=>array(
			"dateFormat"=>"dd/mm/yy",
			'showButtonPanel' => true,
			'changeYear' => true,
			'minDate' => '0',
			'maxDate' => '+6M',
		)
		));
		?>
		<?php echo $form->error($model,'fechaEvento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionEvento'); ?>
		<?php echo $form->textField($model,'descripcionEvento'); ?>
		<?php echo $form->error($model,'descripcionEvento'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->