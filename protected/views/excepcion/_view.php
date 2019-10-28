<?php
/* @var $this ExcepcionController */
/* @var $data Excepcion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_excepcion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_excepcion), array('view', 'id'=>$data->id_excepcion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>