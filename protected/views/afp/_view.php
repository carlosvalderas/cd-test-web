<?php
/* @var $this AfpController */
/* @var $data Afp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_afp')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_afp), array('view', 'id'=>$data->id_afp)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>