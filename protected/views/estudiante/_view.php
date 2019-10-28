<?php
/* @var $this EstudianteController */
/* @var $data Estudiante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estudiante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_estudiante), array('view', 'id'=>$data->id_estudiante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesor_guia')); ?>:</b>
	<?php echo CHtml::encode($data->profesor_guia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empresa_id_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->Empresa_id_empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institucion_id_institucion')); ?>:</b>
	<?php echo CHtml::encode($data->institucion_id_institucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrera_id_carrera')); ?>:</b>
	<?php echo CHtml::encode($data->carrera_id_carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('situacion_academica_id_situacion_academica')); ?>:</b>
	<?php echo CHtml::encode($data->situacion_academica_id_situacion_academica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id_usuario); ?>
	<br />


</div>