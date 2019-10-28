<?php
/* @var $this PerfilController */
/* @var $model Perfil */

$this->breadcrumbs=array(
	'Perfils'=>array('index'),
	$model->id_perfil=>array('view','id'=>$model->id_perfil),
	'Update',
);

$this->menu=array(
	array('label'=>'List Perfil', 'url'=>array('index')),
	array('label'=>'Create Perfil', 'url'=>array('create')),
	array('label'=>'View Perfil', 'url'=>array('view', 'id'=>$model->id_perfil)),
	array('label'=>'Manage Perfil', 'url'=>array('admin')),
);
?>

<h1>Update Perfil <?php echo $model->id_perfil; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>