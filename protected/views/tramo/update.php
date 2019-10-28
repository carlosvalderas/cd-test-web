<?php
/* @var $this TramoController */
/* @var $model Tramo */

$this->breadcrumbs=array(
	'Tramos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tramo', 'url'=>array('index')),
	array('label'=>'Create Tramo', 'url'=>array('create')),
	array('label'=>'View Tramo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tramo', 'url'=>array('admin')),
);
?>

<h1>Update Tramo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>