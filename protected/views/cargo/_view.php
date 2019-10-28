<?php
/* @var $this CargoController */
/* @var $data Cargo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cargo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cargo), array('view', 'id'=>$data->id_cargo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>