<?php
/* @var $this EstadoAsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estado Ases',
);

$this->menu=array(
	array('label'=>'Create EstadoAs', 'url'=>array('create')),
	array('label'=>'Manage EstadoAs', 'url'=>array('admin')),
);
?>

<h1>Estado Ases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
