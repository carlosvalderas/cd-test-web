<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Empleado', 'url'=>array('index')),
	array('label'=>'Manage Empleado', 'url'=>array('admin')),
);
?>

<h1>Create Empleado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>