<?php
/* @var $this ConectadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conectados',
);

$this->menu=array(
	array('label'=>'Create Conectado', 'url'=>array('create')),
	array('label'=>'Manage Conectado', 'url'=>array('admin')),
);
?>

<h1>Conectados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
