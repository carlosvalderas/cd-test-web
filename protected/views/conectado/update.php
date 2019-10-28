<?php
/* @var $this ConectadoController */
/* @var $model Conectado */

$this->breadcrumbs=array(
	'Conectados'=>array('index'),
	$model->id_conectado=>array('view','id'=>$model->id_conectado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Conectado', 'url'=>array('index')),
	array('label'=>'Create Conectado', 'url'=>array('create')),
	array('label'=>'View Conectado', 'url'=>array('view', 'id'=>$model->id_conectado)),
	array('label'=>'Manage Conectado', 'url'=>array('admin')),
);
?>

<h1>Update Conectado <?php echo $model->id_conectado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>