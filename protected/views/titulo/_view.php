<?php
/* @var $this TituloController */
/* @var $data Titulo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_titulo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_titulo), array('view', 'id'=>$data->ID_titulo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />


</div>