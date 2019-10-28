<?php
/* @var $this IsapreController */
/* @var $model Isapre */

$this->breadcrumbs=array(
	'Isapres'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Isapre', 'url'=>array('index')),
	array('label'=>'Manage Isapre', 'url'=>array('admin')),
);
?>

<h1>Create Isapre</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>