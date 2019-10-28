<?php
/* @var $this TramoController */
/* @var $model Tramo */

$this->breadcrumbs=array(
	'Tramos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tramo', 'url'=>array('index')),
	array('label'=>'Create Tramo', 'url'=>array('create')),
	array('label'=>'Update Tramo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tramo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tramo', 'url'=>array('admin')),
);
?>

<h1>View Tramo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
