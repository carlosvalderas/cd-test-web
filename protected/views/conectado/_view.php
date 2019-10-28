<?php
/* @var $this ConectadoController */
/* @var $data Conectado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_conectado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_conectado), array('view', 'id'=>$data->id_conectado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id_usuario); ?>
	<br />


</div>