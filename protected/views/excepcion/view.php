<?php
/* @var $this ExcepcionController */
/* @var $model Excepcion */

$this->breadcrumbs=array(
	'Excepcions'=>array('index'),
	$model->id_excepcion,
);

$this->menu=array(
	array('label'=>'List Excepcion', 'url'=>array('index')),
	array('label'=>'Create Excepcion', 'url'=>array('create')),
	array('label'=>'Update Excepcion', 'url'=>array('update', 'id'=>$model->id_excepcion)),
	array('label'=>'Delete Excepcion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_excepcion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Excepcion', 'url'=>array('admin')),
);
?>

<h1>View Excepcion #<?php echo $model->id_excepcion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_excepcion',
		'nombre',
	),
)); ?>
