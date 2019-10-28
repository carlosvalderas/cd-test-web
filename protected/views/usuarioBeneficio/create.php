<?php
/* @var $this UsuarioBeneficioController */
/* @var $model UsuarioBeneficio */

$this->breadcrumbs=array(
	'Usuario Beneficios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Ver Beneficios', 'url'=>array('index')),
);
?>

<h1>Create UsuarioBeneficio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>