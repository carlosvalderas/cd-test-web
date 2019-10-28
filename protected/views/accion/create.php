<?php
/* @var $this AccionController */
/* @var $model Accion */

$this->breadcrumbs=array(
	'Accions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Accion', 'url'=>array('index')),
	array('label'=>'Manage Accion', 'url'=>array('admin')),
);
?>

<h1>Create Accion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>