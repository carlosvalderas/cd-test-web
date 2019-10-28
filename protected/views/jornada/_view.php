<?php
/* @var $this JornadaController */
/* @var $data Jornada */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jornada')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jornada), array('view', 'id'=>$data->id_jornada)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('h_entrada1')); ?>:</b>
	<?php echo CHtml::encode($data->h_entrada1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('h_salida1')); ?>:</b>
	<?php echo CHtml::encode($data->h_salida1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('h_entrada2')); ?>:</b>
	<?php echo CHtml::encode($data->h_entrada2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('h_salida2')); ?>:</b>
	<?php echo CHtml::encode($data->h_salida2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->dia_inicio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dia_termino')); ?>:</b>
	<?php echo CHtml::encode($data->dia_termino); ?>
	<br />

	*/ ?>

</div>