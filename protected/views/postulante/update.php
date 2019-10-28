<?php
/* @var $this PostulanteController */
/* @var $model Postulante */

$this->breadcrumbs=array(
	'Postulantes'=>array('index'),
	$model->id_postulante=>array('view','id'=>$model->id_postulante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Postulante', 'url'=>array('index')),
	array('label'=>'Create Postulante', 'url'=>array('create')),
	array('label'=>'View Postulante', 'url'=>array('view', 'id'=>$model->id_postulante)),
	array('label'=>'Manage Postulante', 'url'=>array('admin')),
);
?>

<h1>Update Postulante <?php echo $model->id_postulante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>