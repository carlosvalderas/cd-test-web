<?php
/* @var $this SituacionAcademicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Situacion Academicas',
);

$this->menu=array(
	array('label'=>'Create SituacionAcademica', 'url'=>array('create')),
	array('label'=>'Manage SituacionAcademica', 'url'=>array('admin')),
);
?>

<h1>Situacion Academicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
