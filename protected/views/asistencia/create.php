<?php
/* @var $this AsistenciaController */
/* @var $model Asistencia */

$this->breadcrumbs=array(
	'Asistencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Asistencia', 'url'=>array('index')),
	array('label'=>'Manage Asistencia', 'url'=>array('admin')),
);
?>

<h1>Create Asistencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>