<?php
/* @var $this LiquidacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Liquidacions',
);

$this->menu=array(
	array('label'=>'Create Liquidacion', 'url'=>array('create')),
	array('label'=>'Manage Liquidacion', 'url'=>array('admin')),
);
?>

<h1>Liquidacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
