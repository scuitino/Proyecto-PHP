<?php
/* @var $this ImagenController */
/* @var $model Imagen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imagen-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));
$form = $this->beginWidget(
    'CActiveForm',
    array(
        'id' => 'upload-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )
);
// ...
echo $form->labelEx($model, 'image');
echo $form->fileField($model, 'image');
echo $form->error($model, 'image');
// ...
 ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'urlImagen'); ?>
		<?php echo $form->textField($model,'urlImagen',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'urlImagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Inmueble_idInmueble'); ?>
		<?php echo $form->textField($model,'Inmueble_idInmueble'); ?>
		<?php echo $form->error($model,'Inmueble_idInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'portadaImagen'); ?>
		<?php echo $form->textField($model,'portadaImagen'); ?>
		<?php echo $form->error($model,'portadaImagen'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->