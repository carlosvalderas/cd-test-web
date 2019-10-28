<?php
/* @var $this RemuneracionController */
/* @var $model Remuneracion */

$this->breadcrumbs=array(
	'Remuneracions'=>array('index'),
	$model->id_remuneracion=>array('view','id'=>$model->id_remuneracion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Remuneracion', 'url'=>array('index')),
	array('label'=>'Create Remuneracion', 'url'=>array('create')),
	array('label'=>'View Remuneracion', 'url'=>array('view', 'id'=>$model->id_remuneracion)),
	array('label'=>'Manage Remuneracion', 'url'=>array('admin')),
);
?>

<h1>Update Remuneracion <?php echo $model->id_remuneracion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>