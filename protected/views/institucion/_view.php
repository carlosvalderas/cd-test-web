<?php
/* @var $this InstitucionController */
/* @var $data Institucion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_institucion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_institucion), array('view', 'id'=>$data->id_institucion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />


</div>