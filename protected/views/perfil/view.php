<?php
/* @var $this PerfilController */
/* @var $model Perfil */

$this->breadcrumbs=array(
	'Perfils'=>array('index'),
	$model->id_perfil,
);

$this->menu=array(
	array('label'=>'List Perfil', 'url'=>array('index')),
	array('label'=>'Create Perfil', 'url'=>array('create')),
	array('label'=>'Update Perfil', 'url'=>array('update', 'id'=>$model->id_perfil)),
	array('label'=>'Delete Perfil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_perfil),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Perfil', 'url'=>array('admin')),
);
?>

<h1>View Perfil #<?php echo $model->id_perfil; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_perfil',
		'nombre',
		'usuario_id_usuario',
	),
)); ?>
