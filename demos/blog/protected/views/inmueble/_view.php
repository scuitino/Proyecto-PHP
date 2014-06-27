<?php
/* @var $this InmuebleController */
/* @var $data Inmueble */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idInmueble')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idInmueble), array('view', 'id'=>$data->idInmueble)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tituloInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->tituloInmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionInmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->precioInmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destacadoInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->destacadoInmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->estadoInmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('habitacionesInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->habitacionesInmueble); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bañosInmuebles')); ?>:</b>
	<?php echo CHtml::encode($data->bañosInmuebles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garageInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->garageInmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cocinaInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->cocinaInmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('superficieInmueble')); ?>:</b>
	<?php echo CHtml::encode($data->superficieInmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Inmueblecol')); ?>:</b>
	<?php echo CHtml::encode($data->Inmueblecol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Barrio_idBarrio')); ?>:</b>
	<?php echo CHtml::encode($data->Barrio_idBarrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_id); ?>
	<br />

	*/ ?>

</div>