<?php
/* @var $this RemuneracionController */
/* @var $data Remuneracion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_remuneracion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_remuneracion), array('view', 'id'=>$data->id_remuneracion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sueldo_bruto')); ?>:</b>
	<?php echo CHtml::encode($data->sueldo_bruto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcent_afp')); ?>:</b>
	<?php echo CHtml::encode($data->porcent_afp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcent_apv')); ?>:</b>
	<?php echo CHtml::encode($data->porcent_apv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcent_cesante')); ?>:</b>
	<?php echo CHtml::encode($data->porcent_cesante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcent_isapre')); ?>:</b>
	<?php echo CHtml::encode($data->porcent_isapre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcent_fonasa')); ?>:</b>
	<?php echo CHtml::encode($data->porcent_fonasa); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('imp_renta')); ?>:</b>
	<?php echo CHtml::encode($data->imp_renta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isapre_id_isapre')); ?>:</b>
	<?php echo CHtml::encode($data->isapre_id_isapre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('afp_tramo_id')); ?>:</b>
	<?php echo CHtml::encode($data->afp_tramo_id); ?>
	<br />

	*/ ?>

</div>