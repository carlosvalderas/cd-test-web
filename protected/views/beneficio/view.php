<?php
/* @var $this BeneficioController */
/* @var $model Beneficio */

$this->breadcrumbs=array(
	'Beneficios'=>array('index'),
	$model->id_beneficio,
);

$this->menu=array(
	array('label'=>'List Beneficio', 'url'=>array('index')),
	array('label'=>'Create Beneficio', 'url'=>array('create')),
	array('label'=>'Update Beneficio', 'url'=>array('update', 'id'=>$model->id_beneficio)),
	array('label'=>'Delete Beneficio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_beneficio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Beneficio', 'url'=>array('admin')),
);
?>

<h1>View Beneficio #<?php echo $model->id_beneficio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_beneficio',
		'nombre',
	),
)); ?>
