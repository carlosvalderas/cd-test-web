<?php
/* @var $this TramoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tramos',
);

$this->menu=array(
	array('label'=>'Create Tramo', 'url'=>array('create')),
	array('label'=>'Manage Tramo', 'url'=>array('admin')),
);
?>

<h1>Tramos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
