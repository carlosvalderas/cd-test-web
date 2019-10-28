<?php
/* @var $this JornadaController */
/* @var $model Jornada */

$this->breadcrumbs=array(
	'Jornadas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jornada', 'url'=>array('index')),
	array('label'=>'Manage Jornada', 'url'=>array('admin')),
);
?>

<h1>Create Jornada</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>