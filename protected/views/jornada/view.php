<?php
/* @var $this JornadaController */
/* @var $model Jornada */

$this->breadcrumbs=array(
	'Jornadas'=>array('index'),
	$model->id_jornada,
);

$this->menu=array(
	array('label'=>'List Jornada', 'url'=>array('index')),
	array('label'=>'Create Jornada', 'url'=>array('create')),
	array('label'=>'Update Jornada', 'url'=>array('update', 'id'=>$model->id_jornada)),
	array('label'=>'Delete Jornada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jornada),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jornada', 'url'=>array('admin')),
);
?>

<h1>View Jornada #<?php echo $model->id_jornada; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_jornada',
		'nombre',
		'h_entrada1',
		'h_salida1',
		'h_entrada2',
		'h_salida2',
		'dia_inicio',
		'dia_termino',
	),
)); ?>
