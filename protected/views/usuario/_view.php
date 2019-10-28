<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php //echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?></b>
	<?php echo CHtml::link(CHtml::encode('Ver usuario'), array('view', 'id'=>$data->id_usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombres')); ?>:</b>
	<?php echo CHtml::encode($data->Nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_p')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_p); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_m')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut.'-'.$data->dv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo_id_cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo_id_cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_id_estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado_id_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Huella')); ?>:</b>
	<?php echo CHtml::encode($data->Huella); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_nac')); ?>:</b>
	<?php echo CHtml::encode($data->d_nac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_nac')); ?>:</b>
	<?php echo CHtml::encode($data->m_nac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a_nac')); ?>:</b>
	<?php echo CHtml::encode($data->a_nac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil); ?>
	<br />

	*/ ?>

</div>