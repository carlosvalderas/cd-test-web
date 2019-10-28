<?php
/* @var $this UsuarioBeneficioController */
/* @var $model UsuarioBeneficio */

$this->breadcrumbs=array(
	'Usuario Beneficios'=>array('index'),
	$model->id_usuario_beneficio=>array('view','id'=>$model->id_usuario_beneficio),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuarioBeneficio', 'url'=>array('index')),
	array('label'=>'Create UsuarioBeneficio', 'url'=>array('create')),
	array('label'=>'View UsuarioBeneficio', 'url'=>array('view', 'id'=>$model->id_usuario_beneficio)),
	array('label'=>'Manage UsuarioBeneficio', 'url'=>array('admin')),
);
?>

<h1>Update UsuarioBeneficio <?php echo $model->id_usuario_beneficio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>