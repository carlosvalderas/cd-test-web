<?php
/* @var $this PerfilController */
/* @var $data Perfil */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_perfil')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_perfil), array('view', 'id'=>$data->id_perfil)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id_usuario); ?>
	<br />


</div>