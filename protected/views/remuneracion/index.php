<?php
/* @var $this RemuneracionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Remuneracions',
);

$this->menu=array(
	array('label'=>'Create Remuneracion', 'url'=>array('create')),
	array('label'=>'Manage Remuneracion', 'url'=>array('admin')),
);
?>

<h1>Remuneracions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
