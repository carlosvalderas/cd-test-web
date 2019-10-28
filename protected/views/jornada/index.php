<?php
/* @var $this JornadaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jornadas',
);

$this->menu=array(
	array('label'=>'Create Jornada', 'url'=>array('create')),
	array('label'=>'Manage Jornada', 'url'=>array('admin')),
);
?>

<h1>Jornadas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
