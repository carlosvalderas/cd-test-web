<?php
/* @var $this UsuarioExcepcionController */
/* @var $model UsuarioExcepcion */

$this->breadcrumbs=array(
	'Usuario Excepcions'=>array('index'),
	$model->id_usuario_excepcion,
);

$this->menu=array(
	array('label'=>'Ver Excepciones', 'url'=>array('index')),
	array('label'=>'Crear Excepcion', 'url'=>array('create')),
);
?>

<h1>View UsuarioExcepcion #<?php echo $model->id_usuario_excepcion; ?></h1>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_usuario_excepcion',
		'f_inicio',
		'f_fin',
		'excepcion_id_excepcion',
		'usuario_id_usuario',
	),
)); ?>
