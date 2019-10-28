<?php
/* @var $this AfpController */
/* @var $model Afp */

$this->breadcrumbs=array(
	'Afps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Afp', 'url'=>array('index')),
	array('label'=>'Manage Afp', 'url'=>array('admin')),
);
?>

<h1>Create Afp</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>