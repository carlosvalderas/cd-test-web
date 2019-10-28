<?php
/* @var $this PostulanteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Postulantes',
);

$this->menu=array(
	array('label'=>'Create Postulante', 'url'=>array('create')),
	array('label'=>'Manage Postulante', 'url'=>array('admin')),
);
?>

<h1>Postulantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
