<?php
/* @var $this AccionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accions',
);

$this->menu=array(
	array('label'=>'Create Accion', 'url'=>array('create')),
	array('label'=>'Manage Accion', 'url'=>array('admin')),
);
?>

<h1>Accions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
