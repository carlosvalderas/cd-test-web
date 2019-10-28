<?php
/* @var $this BeneficioController */
/* @var $data Beneficio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_beneficio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_beneficio), array('view', 'id'=>$data->id_beneficio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>