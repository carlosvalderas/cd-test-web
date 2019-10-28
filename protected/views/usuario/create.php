<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Perfil'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Ver Empleados', 'url'=>array('index')),
);
?>

<h1>Nuevo Empleado</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'situaciones'=>$situaciones,'cargos'=>$cargos,'estudiante'=>$estudiante,'instituciones'=>$instituciones,'carreras'=>$carreras,'contrato'=>$contrato ,'ciudad'=>$ciudad,'seccions'=>$seccions)); ?>