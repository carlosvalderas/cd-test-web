<?php
/* @var $this LoginController */
/* @var $data Login */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_rut), array('view', 'id'=>$data->id_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>