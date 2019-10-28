<?php
/* @var $this UsuarioExcepcionController */
/* @var $model UsuarioExcepcion */

$this->breadcrumbs=array(
	'Usuario Excepcions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Ver Excepciones', 'url'=>array('index')),
);
?>

<h1>Agregar nueva excepción a empleado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>