<?php
/* @var $this LiquidacionController */
/* @var $data Liquidacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes')); ?>:</b>
	<?php echo CHtml::encode($data->mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agno')); ?>:</b>
	<?php echo CHtml::encode($data->agno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remuneracion_id_remuneracion')); ?>:</b>
	<?php echo CHtml::encode($data->remuneracion_id_remuneracion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_descuento')); ?>:</b>
	<?php echo CHtml::encode($data->dias_descuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sueldo_liquido')); ?>:</b>
	<?php echo CHtml::encode($data->sueldo_liquido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descuento_afp')); ?>:</b>
	<?php echo CHtml::encode($data->descuento_afp); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('descuento_apv')); ?>:</b>
	<?php echo CHtml::encode($data->descuento_apv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descuento_cesante')); ?>:</b>
	<?php echo CHtml::encode($data->descuento_cesante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descuento_isapre')); ?>:</b>
	<?php echo CHtml::encode($data->descuento_isapre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descuento_fonasa')); ?>:</b>
	<?php echo CHtml::encode($data->descuento_fonasa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descuento_imp_renta')); ?>:</b>
	<?php echo CHtml::encode($data->descuento_imp_renta); ?>
	<br />

	*/ ?>

</div>