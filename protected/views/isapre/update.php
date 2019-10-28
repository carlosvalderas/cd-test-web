<?php
/* @var $this IsapreController */
/* @var $model Isapre */

$this->breadcrumbs=array(
	'Isapres'=>array('index'),
	$model->id_isapre=>array('view','id'=>$model->id_isapre),
	'Update',
);

$this->menu=array(
	array('label'=>'List Isapre', 'url'=>array('index')),
	array('label'=>'Create Isapre', 'url'=>array('create')),
	array('label'=>'View Isapre', 'url'=>array('view', 'id'=>$model->id_isapre)),
	array('label'=>'Manage Isapre', 'url'=>array('admin')),
);
?>

<h1>Update Isapre <?php echo $model->id_isapre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>