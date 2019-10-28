<?php
/* @var $this ConectadoController */
/* @var $model Conectado */

$this->breadcrumbs=array(
	'Conectados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Conectado', 'url'=>array('index')),
	array('label'=>'Manage Conectado', 'url'=>array('admin')),
);
?>

<h1>Create Conectado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>