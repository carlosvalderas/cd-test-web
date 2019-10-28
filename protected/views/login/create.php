<?php
/* @var $this LoginController */
/* @var $model Login */

$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
);
?>



<h1>Crear Login</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'usuarios'=>$usuarios)); ?>