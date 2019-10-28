<?php
/* @var $this ContratoEstudianteController */
/* @var $model ContratoEstudiante */

$this->breadcrumbs=array(
	'Contrato Estudiantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContratoEstudiante', 'url'=>array('index')),
	array('label'=>'Manage ContratoEstudiante', 'url'=>array('admin')),
);
?>

<h1>Create ContratoEstudiante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>