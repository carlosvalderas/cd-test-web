<?php
/* @var $this EstadoAsController */
/* @var $model EstadoAs */

$this->breadcrumbs=array(
	'Estado Ases'=>array('index'),
	$model->idestado_as=>array('view','id'=>$model->idestado_as),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstadoAs', 'url'=>array('index')),
	array('label'=>'Create EstadoAs', 'url'=>array('create')),
	array('label'=>'View EstadoAs', 'url'=>array('view', 'id'=>$model->idestado_as)),
	array('label'=>'Manage EstadoAs', 'url'=>array('admin')),
);
?>

<h1>Update EstadoAs <?php echo $model->idestado_as; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>