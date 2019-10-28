<?php
/* @var $this UsuarioBeneficioController */
/* @var $model UsuarioBeneficio */

$this->breadcrumbs=array(
	'Usuario Beneficios'=>array('index'),
	$model->id_usuario_beneficio,
);

$this->menu=array(
	array('label'=>'Ver Beneficios', 'url'=>array('index')),
);
?>

<h1>View UsuarioBeneficio #<?php echo $model->id_usuario_beneficio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_usuario_beneficio',
		'monto',
		'f_inicio',
		'f_fin',
		'beneficio_id_beneficio',
		'usuario_id_usuario',
	),
)); ?>
