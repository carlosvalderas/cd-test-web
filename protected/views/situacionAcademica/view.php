<?php
/* @var $this SituacionAcademicaController */
/* @var $model SituacionAcademica */

$this->breadcrumbs=array(
	'Situacion Academicas'=>array('index'),
	$model->id_situacion_academica,
);

$this->menu=array(
	array('label'=>'List SituacionAcademica', 'url'=>array('index')),
	array('label'=>'Create SituacionAcademica', 'url'=>array('create')),
	array('label'=>'Update SituacionAcademica', 'url'=>array('update', 'id'=>$model->id_situacion_academica)),
	array('label'=>'Delete SituacionAcademica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_situacion_academica),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SituacionAcademica', 'url'=>array('admin')),
);
?>

<h1>View SituacionAcademica #<?php echo $model->id_situacion_academica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_situacion_academica',
		'nombre',
	),
)); ?>
