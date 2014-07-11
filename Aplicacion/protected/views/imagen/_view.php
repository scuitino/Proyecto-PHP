<?php
/* @var $this ImagenController */
/* @var $data Imagen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idImagen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idImagen), array('view', 'id'=>$data->idImagen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('urlImagen')); ?>:</b>
	<?php echo CHtml::encode($data->urlImagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Inmueble_idInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->Inmueble_idInmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portadaImagen')); ?>:</b>
	<?php echo CHtml::encode($data->portadaImagen); ?>
	<br />


</div>