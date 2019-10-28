<?php
/* @var $this EstadoAsController */
/* @var $model EstadoAs */

$this->breadcrumbs=array(
	'Estado Ases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstadoAs', 'url'=>array('index')),
	array('label'=>'Manage EstadoAs', 'url'=>array('admin')),
);
?>

<h1>Create EstadoAs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>