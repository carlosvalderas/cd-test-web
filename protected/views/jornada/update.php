<?php
/* @var $this JornadaController */
/* @var $model Jornada */

$this->breadcrumbs=array(
	'Jornadas'=>array('index'),
	$model->id_jornada=>array('view','id'=>$model->id_jornada),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jornada', 'url'=>array('index')),
	array('label'=>'Create Jornada', 'url'=>array('create')),
	array('label'=>'View Jornada', 'url'=>array('view', 'id'=>$model->id_jornada)),
	array('label'=>'Manage Jornada', 'url'=>array('admin')),
);
?>

<h1>Update Jornada <?php echo $model->id_jornada; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>