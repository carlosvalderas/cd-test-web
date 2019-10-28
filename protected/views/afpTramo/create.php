<?php
/* @var $this AfpTramoController */
/* @var $model AfpTramo */

$this->breadcrumbs=array(
	'Afp Tramos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AfpTramo', 'url'=>array('index')),
	array('label'=>'Manage AfpTramo', 'url'=>array('admin')),
);
?>

<h1>Create AfpTramo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>