<?php
/* @var $this BarrioController */
/* @var $data Barrio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idBarrio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idBarrio), array('view', 'id'=>$data->idBarrio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreBarrio')); ?>:</b>
	<?php echo CHtml::encode($data->nombreBarrio); ?>
	<br />


</div>