<?php
/* @var $this ContactoController */
/* @var $model Contacto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php if(Yii::app()->user->isGuest) {
		 echo $form->labelEx($model,'nombre'); 
		 echo $form->textField($model,'nombre',array('size'=>15,'maxlength'=>15)); 
		 echo $form->error($model,'nombre');
		} else {
			 if ((Yii::app()->authManager->checkAccess("registrado",Yii::app()->user->id))) {
			
			 $UsuarioID=Yii::app()->user->id;
			 $modelito=Users::model()->findByPk($UsuarioID);
			 $model->nombre=$modelito->username;
			 $model->email=$modelito->email;
			 }
		 echo $form->labelEx($model,'nombre'); 
		 echo $form->textField($model,'nombre',array('size'=>15,'maxlength'=>15, 
		 	'value'=>"$model->nombre", 'readonly'=>"true")); 
		 echo $form->error($model,'nombre');

		}

		?>	
	</div>

	<div class="row">
		<?php if(Yii::app()->user->isGuest) {
		echo $form->labelEx($model,'email'); 
		echo $form->textField($model,'email',array('size'=>15,'maxlength'=>15));
		echo $form->error($model,'email'); 
	}
	else {
		if ((Yii::app()->authManager->checkAccess("registrado",Yii::app()->user->id))) {
			
			 $UsuarioID=Yii::app()->user->id;
			 $modelito=Users::model()->findByPk($UsuarioID);
			 $model->nombre=$modelito->username;
			 $model->email=$modelito->email;
			 }
		echo $form->labelEx($model,'email'); 
		echo $form->textField($model,'email',array('size'=>15,'maxlength'=>15,
			'value'=>"$model->email", 'readonly'=>"true"));
		echo $form->error($model,'email'); 
	





	}

	 ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mensaje'); ?>
		<?php echo $form->textField($model,'mensaje',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'mensaje'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->