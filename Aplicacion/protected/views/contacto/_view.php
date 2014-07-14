<?php
/* @var $this ContactoController */
/* @var $data Contacto */
?>

<div class="view">

<!-- 	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Contacto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Contacto), array('view', 'id'=>$data->id_Contacto)); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mensaje')); ?>:</b>
	<?php echo CHtml::encode($data->mensaje); ?>
	<br />


</div>