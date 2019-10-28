<?php
/* @var $this SituacionAcademicaController */
/* @var $model SituacionAcademica */

$this->breadcrumbs=array(
	'Situacion Academicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SituacionAcademica', 'url'=>array('index')),
	array('label'=>'Manage SituacionAcademica', 'url'=>array('admin')),
);
?>

<h1>Create SituacionAcademica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>