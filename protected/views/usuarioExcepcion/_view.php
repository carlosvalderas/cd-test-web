<?php
/* @var $this UsuarioExcepcionController */
/* @var $data UsuarioExcepcion */
$us=Usuario::model()->findByPk($data->usuario_id_usuario);
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('excepcion_id_excepcion')); ?>:</b>
	<?php
	$asd=Excepcion::model()->findByPk($data->excepcion_id_excepcion);
	echo $asd->nombre;
	?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('id_usuario_excepcion')); 
	?></b>
	<?php //echo CHtml::link(CHtml::encode($data->id_usuario_excepcion), array('view', 'id'=>$data->id_usuario_excepcion)); 
	?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('f_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->f_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('f_fin')); ?>:</b>
	<?php echo CHtml::encode($data->f_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario')); ?>:</b>
	<?php //echo CHtml::encode($data->usuario_id_usuario); 
	echo "<a href=http://localhost/gestionlaboral/index.php?r=usuario/view&id=".$data->usuario_id_usuario." target=_blank>".$us->Nombres.' '.$us->apellido_p."</a>";
	?>
	<br />




</div>