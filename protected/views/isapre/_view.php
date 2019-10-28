<?php
/* @var $this IsapreController */
/* @var $data Isapre */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_isapre')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_isapre), array('view', 'id'=>$data->id_isapre)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>