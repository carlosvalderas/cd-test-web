<?php
/* @var $this TituloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Titulos',
);

$this->menu=array(
	array('label'=>'Create Titulo', 'url'=>array('create')),
	array('label'=>'Manage Titulo', 'url'=>array('admin')),
);
?>

<h1>Titulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
