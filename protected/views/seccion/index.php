<?php
/* @var $this SeccionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seccions',
);

$this->menu=array(
	array('label'=>'Create Seccion', 'url'=>array('create')),
	array('label'=>'Manage Seccion', 'url'=>array('admin')),
);
?>

<h1>Seccions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
