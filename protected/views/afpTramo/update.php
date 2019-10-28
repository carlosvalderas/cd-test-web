<?php
/* @var $this AfpTramoController */
/* @var $model AfpTramo */

$this->breadcrumbs=array(
	'Afp Tramos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AfpTramo', 'url'=>array('index')),
	array('label'=>'Create AfpTramo', 'url'=>array('create')),
	array('label'=>'View AfpTramo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AfpTramo', 'url'=>array('admin')),
);
?>

<h1>Update AfpTramo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>