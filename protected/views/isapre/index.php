<?php
/* @var $this IsapreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Isapres',
);

$this->menu=array(
	array('label'=>'Create Isapre', 'url'=>array('create')),
	array('label'=>'Manage Isapre', 'url'=>array('admin')),
);
?>

<h1>Isapres</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
