<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->id_cargo=>array('view','id'=>$model->id_cargo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cargo', 'url'=>array('index')),
	array('label'=>'Create Cargo', 'url'=>array('create')),
	array('label'=>'View Cargo', 'url'=>array('view', 'id'=>$model->id_cargo)),
	array('label'=>'Manage Cargo', 'url'=>array('admin')),
);
?>

<h1>Update Cargo <?php echo $model->id_cargo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>