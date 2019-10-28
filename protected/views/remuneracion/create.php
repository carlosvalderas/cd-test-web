<?php
/* @var $this RemuneracionController */
/* @var $model Remuneracion */

$this->breadcrumbs=array(
	'Remuneracions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Remuneracion', 'url'=>array('index')),
	array('label'=>'Manage Remuneracion', 'url'=>array('admin')),
);
?>

<h1>Calculo de Remuneracion Liquida</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'afp'=>$afp,'isapre'=>$isapre)); ?>