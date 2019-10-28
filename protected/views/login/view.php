<?php
/* @var $this LoginController */
/* @var $model Login */

$this->breadcrumbs=array(
	'Logins'=>array('index'),
	$model->id_rut,
);

$this->menu=array(
	array('label'=>'Lista de Login', 'url'=>array('index')),
	array('label'=>'Nuevo Login', 'url'=>array('create')),
	array('label'=>'Actualizar Login', 'url'=>array('update', 'id'=>$model->id_rut)),
	array('label'=>'Eliminar Login', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rut),'confirm'=>'¿ Esta seguro de querer eliminar el login ?')),
);
?>

<h1>Login RUT : <?php echo $model->id_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'cargo',
	),
)); ?>
