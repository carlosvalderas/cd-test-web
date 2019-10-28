<?php
/* @var $this ContratoController */
/* @var $data Contrato */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contrato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contrato), array('view', 'id'=>$data->id_contrato)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes')); ?>:</b>
	<?php echo CHtml::encode($data->mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio')); ?>:</b>
	<?php echo CHtml::encode($data->anio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condiciones')); ?>:</b>
	<?php echo CHtml::encode($data->condiciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_abandono')); ?>:</b>
	<?php echo CHtml::encode($data->dias_abandono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ejemplares')); ?>:</b>
	<?php echo CHtml::encode($data->ejemplares); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jornada_id_jornada')); ?>:</b>
	<?php echo CHtml::encode($data->jornada_id_jornada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('servicios')); ?>:</b>
	<?php echo CHtml::encode($data->servicios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia_termino')); ?>:</b>
	<?php echo CHtml::encode($data->dia_termino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes_termino')); ?>:</b>
	<?php echo CHtml::encode($data->mes_termino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio_termino')); ?>:</b>
	<?php echo CHtml::encode($data->anio_termino); ?>
	<br />

	*/ ?>

</div>