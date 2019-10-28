<?php
/* @var $this TituloController */
/* @var $model Titulo */

$this->breadcrumbs=array(
	'Titulos'=>array('index'),
	$model->ID_titulo=>array('view','id'=>$model->ID_titulo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Titulo', 'url'=>array('index')),
	array('label'=>'Create Titulo', 'url'=>array('create')),
	array('label'=>'View Titulo', 'url'=>array('view', 'id'=>$model->ID_titulo)),
	array('label'=>'Manage Titulo', 'url'=>array('admin')),
);
?>

<h1>Update Titulo <?php echo $model->ID_titulo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>