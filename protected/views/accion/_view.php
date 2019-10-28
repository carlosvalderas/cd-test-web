<?php
/* @var $this AccionController */
/* @var $data Accion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_accion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_accion), array('view', 'id'=>$data->id_accion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accion')); ?>:</b>
	<?php echo CHtml::encode($data->accion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_id_rut')); ?>:</b>
	<?php echo CHtml::encode($data->login_id_rut); ?>
	<br />


</div>