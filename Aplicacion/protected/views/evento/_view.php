<?php
/* @var $this EventoController */
/* @var $data Evento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEvento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEvento), array('view', 'id'=>$data->idEvento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Inmueble_idInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->Inmueble_idInmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaEvento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaEvento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionEvento')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionEvento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_id); ?>
	<br />


</div>