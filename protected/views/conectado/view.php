<?php
/* @var $this ConectadoController */
/* @var $model Conectado */

$this->breadcrumbs=array(
	'Conectados'=>array('index'),
	$model->id_conectado,
);

$this->menu=array(
	array('label'=>'List Conectado', 'url'=>array('index')),
	array('label'=>'Create Conectado', 'url'=>array('create')),
	array('label'=>'Update Conectado', 'url'=>array('update', 'id'=>$model->id_conectado)),
	array('label'=>'Delete Conectado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_conectado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Conectado', 'url'=>array('admin')),
);
?>

<h1>View Conectado #<?php echo $model->id_conectado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_conectado',
		'hora',
		'fecha',
		'usuario_id_usuario',
	),
)); ?>
