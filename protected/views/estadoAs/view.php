<?php
/* @var $this EstadoAsController */
/* @var $model EstadoAs */

$this->breadcrumbs=array(
	'Estado Ases'=>array('index'),
	$model->idestado_as,
);

$this->menu=array(
	array('label'=>'List EstadoAs', 'url'=>array('index')),
	array('label'=>'Create EstadoAs', 'url'=>array('create')),
	array('label'=>'Update EstadoAs', 'url'=>array('update', 'id'=>$model->idestado_as)),
	array('label'=>'Delete EstadoAs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idestado_as),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstadoAs', 'url'=>array('admin')),
);
?>

<h1>View EstadoAs #<?php echo $model->idestado_as; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idestado_as',
		'nombre',
	),
)); ?>
