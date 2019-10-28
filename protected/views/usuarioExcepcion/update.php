<?php
/* @var $this UsuarioExcepcionController */
/* @var $model UsuarioExcepcion */

$this->breadcrumbs=array(
	'Usuario Excepcions'=>array('index'),
	$model->id_usuario_excepcion=>array('view','id'=>$model->id_usuario_excepcion),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuarioExcepcion', 'url'=>array('index')),
	array('label'=>'Create UsuarioExcepcion', 'url'=>array('create')),
	array('label'=>'View UsuarioExcepcion', 'url'=>array('view', 'id'=>$model->id_usuario_excepcion)),
	array('label'=>'Manage UsuarioExcepcion', 'url'=>array('admin')),
);
?>

<h1>Update UsuarioExcepcion <?php echo $model->id_usuario_excepcion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>