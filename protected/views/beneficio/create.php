<?php
/* @var $this BeneficioController */
/* @var $model Beneficio */

$this->breadcrumbs=array(
	'Beneficios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Beneficio', 'url'=>array('index')),
	array('label'=>'Manage Beneficio', 'url'=>array('admin')),
);
?>

<h1>Create Beneficio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>