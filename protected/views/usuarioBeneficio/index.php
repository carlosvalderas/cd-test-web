<?php
/* @var $this UsuarioBeneficioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuario Beneficios',
);

$this->menu=array(
	array('label'=>'Ver Beneficios', 'url'=>array('index')),
);
?>

<h1>Beneficios de empleados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
