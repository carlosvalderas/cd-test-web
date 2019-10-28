<?php
/* @var $this ExcepcionController */
/* @var $model Excepcion */

$this->breadcrumbs=array(
	'Excepcions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Excepcion', 'url'=>array('index')),
	array('label'=>'Manage Excepcion', 'url'=>array('admin')),
);
?>

<h1>Create Excepcion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>