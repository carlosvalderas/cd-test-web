<?php
/* @var $this TramoController */
/* @var $model Tramo */

$this->breadcrumbs=array(
	'Tramos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tramo', 'url'=>array('index')),
	array('label'=>'Manage Tramo', 'url'=>array('admin')),
);
?>

<h1>Create Tramo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>