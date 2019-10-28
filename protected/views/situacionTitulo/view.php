<?php
/* @var $this SituacionTituloController */
/* @var $model SituacionTitulo */

$this->breadcrumbs=array(
	'Situacion Titulos'=>array('index'),
	$model->ID_situacion_ac,
);

$this->menu=array(
	array('label'=>'List SituacionTitulo', 'url'=>array('index')),
	array('label'=>'Create SituacionTitulo', 'url'=>array('create')),
	array('label'=>'Update SituacionTitulo', 'url'=>array('update', 'id'=>$model->ID_situacion_ac)),
	array('label'=>'Delete SituacionTitulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_situacion_ac),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SituacionTitulo', 'url'=>array('admin')),
);
?>

<h1>View SituacionTitulo #<?php echo $model->ID_situacion_ac; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_situacion_ac',
		'ID_titulo',
	),
)); ?>
