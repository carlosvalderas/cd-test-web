<?php
/* @var $this InstitucionController */
/* @var $model Institucion */

$this->breadcrumbs=array(
	'Institucions'=>array('index'),
	$model->id_institucion=>array('view','id'=>$model->id_institucion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Institucion', 'url'=>array('index')),
	array('label'=>'Create Institucion', 'url'=>array('create')),
	array('label'=>'View Institucion', 'url'=>array('view', 'id'=>$model->id_institucion)),
	array('label'=>'Manage Institucion', 'url'=>array('admin')),
);
?>

<h1>Update Institucion <?php echo $model->id_institucion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>