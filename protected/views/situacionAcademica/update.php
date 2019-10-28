<?php
/* @var $this SituacionAcademicaController */
/* @var $model SituacionAcademica */

$this->breadcrumbs=array(
	'Situacion Academicas'=>array('index'),
	$model->id_situacion_academica=>array('view','id'=>$model->id_situacion_academica),
	'Update',
);

$this->menu=array(
	array('label'=>'List SituacionAcademica', 'url'=>array('index')),
	array('label'=>'Create SituacionAcademica', 'url'=>array('create')),
	array('label'=>'View SituacionAcademica', 'url'=>array('view', 'id'=>$model->id_situacion_academica)),
	array('label'=>'Manage SituacionAcademica', 'url'=>array('admin')),
);
?>

<h1>Update SituacionAcademica <?php echo $model->id_situacion_academica; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>