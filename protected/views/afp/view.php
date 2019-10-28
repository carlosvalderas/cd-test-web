<?php
/* @var $this AfpController */
/* @var $model Afp */

$this->breadcrumbs=array(
	'Afps'=>array('index'),
	$model->id_afp,
);

$this->menu=array(
	array('label'=>'List Afp', 'url'=>array('index')),
	array('label'=>'Create Afp', 'url'=>array('create')),
	array('label'=>'Update Afp', 'url'=>array('update', 'id'=>$model->id_afp)),
	array('label'=>'Delete Afp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_afp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Afp', 'url'=>array('admin')),
);
?>

<h1>View Afp #<?php echo $model->id_afp; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_afp',
		'nombre',
	),
)); ?>
