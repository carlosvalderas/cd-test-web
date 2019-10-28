<?php
/* @var $this EstadoAsController */
/* @var $data EstadoAs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idestado_as')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idestado_as), array('view', 'id'=>$data->idestado_as)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>