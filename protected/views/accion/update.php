<?php
/* @var $this AccionController */
/* @var $model Accion */

$this->breadcrumbs=array(
	'Accions'=>array('index'),
	$model->id_accion=>array('view','id'=>$model->id_accion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accion', 'url'=>array('index')),
	array('label'=>'Create Accion', 'url'=>array('create')),
	array('label'=>'View Accion', 'url'=>array('view', 'id'=>$model->id_accion)),
	array('label'=>'Manage Accion', 'url'=>array('admin')),
);
?>

<h1>Update Accion <?php echo $model->id_accion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>