<?php
/* @var $this TituloController */
/* @var $model Titulo */

$this->breadcrumbs=array(
	'Titulos'=>array('index'),
	$model->ID_titulo,
);

$this->menu=array(
	array('label'=>'List Titulo', 'url'=>array('index')),
	array('label'=>'Create Titulo', 'url'=>array('create')),
	array('label'=>'Update Titulo', 'url'=>array('update', 'id'=>$model->ID_titulo)),
	array('label'=>'Delete Titulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_titulo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Titulo', 'url'=>array('admin')),
);
?>

<h1>View Titulo #<?php echo $model->ID_titulo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_titulo',
		'Nombre',
	),
)); ?>
