<?php
/* @var $this ExcepcionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Excepcions',
);

$this->menu=array(
	array('label'=>'Create Excepcion', 'url'=>array('create')),
	array('label'=>'Manage Excepcion', 'url'=>array('admin')),
);
?>

<h1>Excepcions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
