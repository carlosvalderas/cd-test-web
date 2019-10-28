<?php
/* @var $this AfpController */
/* @var $model Afp */

$this->breadcrumbs=array(
	'Afps'=>array('index'),
	$model->id_afp=>array('view','id'=>$model->id_afp),
	'Update',
);

$this->menu=array(
	array('label'=>'List Afp', 'url'=>array('index')),
	array('label'=>'Create Afp', 'url'=>array('create')),
	array('label'=>'View Afp', 'url'=>array('view', 'id'=>$model->id_afp)),
	array('label'=>'Manage Afp', 'url'=>array('admin')),
);
?>

<h1>Update Afp <?php echo $model->id_afp; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>