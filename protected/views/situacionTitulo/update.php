<?php
/* @var $this SituacionTituloController */
/* @var $model SituacionTitulo */

$this->breadcrumbs=array(
	'Situacion Titulos'=>array('index'),
	$model->ID_situacion_ac=>array('view','id'=>$model->ID_situacion_ac),
	'Update',
);

$this->menu=array(
	array('label'=>'List SituacionTitulo', 'url'=>array('index')),
	array('label'=>'Create SituacionTitulo', 'url'=>array('create')),
	array('label'=>'View SituacionTitulo', 'url'=>array('view', 'id'=>$model->ID_situacion_ac)),
	array('label'=>'Manage SituacionTitulo', 'url'=>array('admin')),
);
?>

<h1>Update SituacionTitulo <?php echo $model->ID_situacion_ac; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>