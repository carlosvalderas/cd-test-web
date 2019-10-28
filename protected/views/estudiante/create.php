<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estudiante', 'url'=>array('index')),
	array('label'=>'Manage Estudiante', 'url'=>array('admin')),
);
?>

<h1>Create Estudiante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>