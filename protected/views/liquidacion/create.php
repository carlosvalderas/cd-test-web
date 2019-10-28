<?php
/* @var $this LiquidacionController */
/* @var $model Liquidacion */

$this->breadcrumbs=array(
	'Liquidacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Liquidacion', 'url'=>array('index')),
	array('label'=>'Manage Liquidacion', 'url'=>array('admin')),
);
?>

<h1>Create Liquidacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>