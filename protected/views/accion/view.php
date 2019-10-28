<?php
/* @var $this AccionController */
/* @var $model Accion */

$this->breadcrumbs=array(
	'Accions'=>array('index'),
	$model->id_accion,
);

$this->menu=array(
	array('label'=>'List Accion', 'url'=>array('index')),
	array('label'=>'Create Accion', 'url'=>array('create')),
	array('label'=>'Update Accion', 'url'=>array('update', 'id'=>$model->id_accion)),
	array('label'=>'Delete Accion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_accion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Accion', 'url'=>array('admin')),
);
?>

<h1>View Accion #<?php echo $model->id_accion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_accion',
		'accion',
		'fecha',
		'hora',
		'login_id_rut',
	),
)); ?>
