<?php
/* @var $this ExcepcionController */
/* @var $model Excepcion */

$this->breadcrumbs=array(
	'Excepcions'=>array('index'),
	$model->id_excepcion=>array('view','id'=>$model->id_excepcion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Excepcion', 'url'=>array('index')),
	array('label'=>'Create Excepcion', 'url'=>array('create')),
	array('label'=>'View Excepcion', 'url'=>array('view', 'id'=>$model->id_excepcion)),
	array('label'=>'Manage Excepcion', 'url'=>array('admin')),
);
?>

<h1>Update Excepcion <?php echo $model->id_excepcion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>