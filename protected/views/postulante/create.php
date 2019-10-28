<?php
/* @var $this PostulanteController */
/* @var $model Postulante */

$this->breadcrumbs=array(
	'Postulantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Postulante', 'url'=>array('index')),
	array('label'=>'Manage Postulante', 'url'=>array('admin')),
);
?>

<h1>Create Postulante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>