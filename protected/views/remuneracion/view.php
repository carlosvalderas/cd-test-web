<?php
/* @var $this RemuneracionController */
/* @var $model Remuneracion */

$this->breadcrumbs=array(
	'Remuneracions'=>array('index'),
	$model->id_remuneracion,
);

$this->menu=array(
	array('label'=>'List Remuneracion', 'url'=>array('index')),
	array('label'=>'Create Remuneracion', 'url'=>array('create')),
	array('label'=>'Update Remuneracion', 'url'=>array('update', 'id'=>$model->id_remuneracion)),
	array('label'=>'Delete Remuneracion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_remuneracion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Remuneracion', 'url'=>array('admin')),
);
?>

<h1>View Remuneracion #<?php echo $model->id_remuneracion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_remuneracion',
		'sueldo_bruto',
		'porcent_afp',
		'porcent_apv',
		'porcent_cesante',
		'porcent_isapre',
		'porcent_fonasa',
		'imp_renta',
		'isapre_id_isapre',
		'usuario_id_usuario',
		'afp_tramo_id',
	),
)); ?>
