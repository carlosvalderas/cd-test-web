<?php
/* @var $this AfpTramoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Afp Tramos',
);

$this->menu=array(
	array('label'=>'Create AfpTramo', 'url'=>array('create')),
	array('label'=>'Manage AfpTramo', 'url'=>array('admin')),
);
?>

<h1>Afp Tramos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
