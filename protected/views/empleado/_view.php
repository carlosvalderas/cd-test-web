<?php
/* @var $this EmpleadoController */
/* @var $data Empleado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_empleado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_empleado), array('view', 'id'=>$data->id_empleado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('renta_bruta')); ?>:</b>
	<?php echo CHtml::encode($data->renta_bruta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('renta_liquida')); ?>:</b>
	<?php echo CHtml::encode($data->renta_liquida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empresa_id_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->Empresa_id_empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id_usuario); ?>
	<br />


</div>