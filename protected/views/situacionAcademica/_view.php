<?php
/* @var $this SituacionAcademicaController */
/* @var $data SituacionAcademica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_situacion_academica')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_situacion_academica), array('view', 'id'=>$data->id_situacion_academica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>