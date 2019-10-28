<?php
/* @var $this InstitucionController */
/* @var $model Institucion */

$this->breadcrumbs=array(
	'Institucions'=>array('index'),
	$model->id_institucion,
);

$this->menu=array(
	array('label'=>'List Institucion', 'url'=>array('index')),
	array('label'=>'Create Institucion', 'url'=>array('create')),
	array('label'=>'Update Institucion', 'url'=>array('update', 'id'=>$model->id_institucion)),
	array('label'=>'Delete Institucion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_institucion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Institucion', 'url'=>array('admin')),
);
?>

<h1>View Institucion #<?php echo $model->id_institucion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_institucion',
		'nombre',
		'direccion',
		'telefono',
	),
)); ?>
