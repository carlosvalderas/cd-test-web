<?php
/* @var $this ContratoEstudianteController */
/* @var $data ContratoEstudiante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contrato_estudiante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contrato_estudiante), array('view', 'id'=>$data->id_contrato_estudiante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->id_ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes')); ?>:</b>
	<?php echo CHtml::encode($data->mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('año')); ?>:</b>
	<?php echo CHtml::encode($data->año); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estudiante')); ?>:</b>
	<?php echo CHtml::encode($data->id_estudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condiciones')); ?>:</b>
	<?php echo CHtml::encode($data->condiciones); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('horas')); ?>:</b>
	<?php echo CHtml::encode($data->horas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jornada')); ?>:</b>
	<?php echo CHtml::encode($data->id_jornada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_beneficio')); ?>:</b>
	<?php echo CHtml::encode($data->id_beneficio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_abandono')); ?>:</b>
	<?php echo CHtml::encode($data->dias_abandono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ejemplares')); ?>:</b>
	<?php echo CHtml::encode($data->ejemplares); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jornada_id_jornada')); ?>:</b>
	<?php echo CHtml::encode($data->jornada_id_jornada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jornada_Empleado_id_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->jornada_Empleado_id_empleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jornada_Empleado_Empresa_id_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->jornada_Empleado_Empresa_id_empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institucion_id_institucion')); ?>:</b>
	<?php echo CHtml::encode($data->institucion_id_institucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficio_id_beneficio')); ?>:</b>
	<?php echo CHtml::encode($data->beneficio_id_beneficio); ?>
	<br />

	*/ ?>

</div>