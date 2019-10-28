<?php
/* @var $this BeneficioController */
/* @var $model Beneficio */

$this->breadcrumbs=array(
	'Beneficios'=>array('index'),
	$model->id_beneficio=>array('view','id'=>$model->id_beneficio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Beneficio', 'url'=>array('index')),
	array('label'=>'Create Beneficio', 'url'=>array('create')),
	array('label'=>'View Beneficio', 'url'=>array('view', 'id'=>$model->id_beneficio)),
	array('label'=>'Manage Beneficio', 'url'=>array('admin')),
);
?>

<h1>Update Beneficio <?php echo $model->id_beneficio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>