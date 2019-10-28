<?php
/* @var $this PostulanteController */
/* @var $model Postulante */

$this->breadcrumbs=array(
	'Postulantes'=>array('index'),
	$model->id_postulante,
);

$this->menu=array(
	array('label'=>'List Postulante', 'url'=>array('index')),
	array('label'=>'Create Postulante', 'url'=>array('create')),
	array('label'=>'Update Postulante', 'url'=>array('update', 'id'=>$model->id_postulante)),
	array('label'=>'Delete Postulante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_postulante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Postulante', 'url'=>array('admin')),
);
?>

<h1>View Postulante #<?php echo $model->id_postulante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_postulante',
		'id_situacion',
		'informacion_adicional',
		'renta_esperada',
		'referencias',
		'Empresa_id_empresa',
	),
)); ?>
