<?php
/* @var $this AfpTramoController */
/* @var $model AfpTramo */

$this->breadcrumbs=array(
	'Afp Tramos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AfpTramo', 'url'=>array('index')),
	array('label'=>'Create AfpTramo', 'url'=>array('create')),
	array('label'=>'Update AfpTramo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AfpTramo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AfpTramo', 'url'=>array('admin')),
);
?>

<h1>View AfpTramo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'porcentaje',
		'afp_id_afp',
		'tramo_id',
	),
)); ?>
