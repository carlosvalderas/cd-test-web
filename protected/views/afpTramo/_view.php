<?php
/* @var $this AfpTramoController */
/* @var $data AfpTramo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afp_id_afp')); ?>:</b>
	<?php echo CHtml::encode($data->afp_id_afp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tramo_id')); ?>:</b>
	<?php echo CHtml::encode($data->tramo_id); ?>
	<br />


</div>