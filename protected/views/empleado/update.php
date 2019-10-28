<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->id_empleado=>array('view','id'=>$model->id_empleado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Empleado', 'url'=>array('index')),
	array('label'=>'Create Empleado', 'url'=>array('create')),
	array('label'=>'View Empleado', 'url'=>array('view', 'id'=>$model->id_empleado)),
	array('label'=>'Manage Empleado', 'url'=>array('admin')),
);
?>

<h1>Update Empleado <?php echo $model->id_empleado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>