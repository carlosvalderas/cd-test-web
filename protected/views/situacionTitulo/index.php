<?php
/* @var $this SituacionTituloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Situacion Titulos',
);

$this->menu=array(
	array('label'=>'Create SituacionTitulo', 'url'=>array('create')),
	array('label'=>'Manage SituacionTitulo', 'url'=>array('admin')),
);
?>

<h1>Situacion Titulos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
