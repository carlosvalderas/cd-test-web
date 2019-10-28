<?php
/* @var $this UsuarioExcepcionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuario Excepcions',
);

$this->menu=array(
	array('label'=>'Crear Excepcion', 'url'=>array('create')),
);
?>

<h1>Empleados con excepciones</h1>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
