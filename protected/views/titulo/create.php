<?php
/* @var $this TituloController */
/* @var $model Titulo */

$this->breadcrumbs=array(
	'Titulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Titulo', 'url'=>array('index')),
	array('label'=>'Manage Titulo', 'url'=>array('admin')),
);
?>

<h1>Create Titulo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>