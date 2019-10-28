<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carreras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Carrera', 'url'=>array('index')),
	array('label'=>'Manage Carrera', 'url'=>array('admin')),
);
?>

<h1>Create Carrera</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>