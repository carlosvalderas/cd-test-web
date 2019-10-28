<?php
/* @var $this SeccionController */
/* @var $data Seccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idseccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idseccion), array('view', 'id'=>$data->idseccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_sec')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_sec); ?>
	<br />


</div>