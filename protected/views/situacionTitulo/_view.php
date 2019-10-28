<?php
/* @var $this SituacionTituloController */
/* @var $data SituacionTitulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_situacion_ac')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_situacion_ac), array('view', 'id'=>$data->ID_situacion_ac)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->ID_titulo); ?>
	<br />


</div>