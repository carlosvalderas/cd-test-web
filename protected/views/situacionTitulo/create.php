<?php
/* @var $this SituacionTituloController */
/* @var $model SituacionTitulo */

$this->breadcrumbs=array(
	'Situacion Titulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SituacionTitulo', 'url'=>array('index')),
	array('label'=>'Manage SituacionTitulo', 'url'=>array('admin')),
);
?>

<h1>Create SituacionTitulo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>