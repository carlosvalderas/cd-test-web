<?php
/* @var $this PostulanteController */
/* @var $data Postulante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_postulante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_postulante), array('view', 'id'=>$data->id_postulante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_situacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_situacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacion_adicional')); ?>:</b>
	<?php echo CHtml::encode($data->informacion_adicional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('renta_esperada')); ?>:</b>
	<?php echo CHtml::encode($data->renta_esperada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referencias')); ?>:</b>
	<?php echo CHtml::encode($data->referencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empresa_id_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->Empresa_id_empresa); ?>
	<br />


</div>