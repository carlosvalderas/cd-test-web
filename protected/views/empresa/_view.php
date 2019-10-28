<?php
/* @var $this EmpresaController */
/* @var $data Empresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_empresa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_empresa), array('view', 'id'=>$data->id_empresa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razon')); ?>:</b>
	<?php echo CHtml::encode($data->razon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut_representante')); ?>:</b>
	<?php echo CHtml::encode($data->rut_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_representante')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('domicilio')); ?>:</b>
	<?php echo CHtml::encode($data->domicilio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />


</div>