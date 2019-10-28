<?php
/* @var $this AsistenciaController */
/* @var $data Asistencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAsistencia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAsistencia), array('view', 'id'=>$data->idAsistencia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_as_idestado_as')); ?>:</b>
	<?php echo CHtml::encode($data->estado_as_idestado_as); ?>
	<br />


</div>