<?php
/* @var $this BeneficioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Beneficios',
);

$this->menu=array(
	array('label'=>'Create Beneficio', 'url'=>array('create')),
	array('label'=>'Manage Beneficio', 'url'=>array('admin')),
);
?>

<h1>Beneficios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
