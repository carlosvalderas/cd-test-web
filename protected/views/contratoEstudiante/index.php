<?php
/* @var $this ContratoEstudianteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contrato Estudiantes',
);

$this->menu=array(
	array('label'=>'Create ContratoEstudiante', 'url'=>array('create')),
	array('label'=>'Manage ContratoEstudiante', 'url'=>array('admin')),
);
?>

<h1>Contrato Estudiantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
