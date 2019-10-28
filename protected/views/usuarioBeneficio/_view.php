<?php
/* @var $this UsuarioBeneficioController */
/* @var $data UsuarioBeneficio */
$mod=Beneficio::model()->findByPk($data->beneficio_id_beneficio);
$usi=Usuario::model()->findByPk($data->usuario_id_usuario);
?>

<div class="view">

	
	<?php 
		if($data->f_fin == '' || $data->f_fin == NULL)
			$fin =  "Indefinido";
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha inicio')); ?>:</b>
	<?php echo CHtml::encode($data->f_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha termino')); ?>:</b>
	<?php echo CHtml::encode($fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Beneficio')); ?>:</b>
	<?php echo CHtml::encode($mod->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario Beneficiado')); ?>:</b>
	<?php echo CHtml::encode($usi->Nombres.' '.$usi->apellido_p.' '.$usi->apellido_m); ?>
	<br />


</div>