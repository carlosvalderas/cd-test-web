<?php
/* @var $this UsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perfil',
);

$this->menu=array(
	array('label'=>'Nuevo empleado', 'url'=>array('create')),
        array('label'=>'Ver empleados', 'url'=>array('index')),
);
?>

<h1>Perfil Empleados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
