<?php
/* @var $this LiquidacionController */
/* @var $model Liquidacion */

$this->breadcrumbs=array(
	'Liquidacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Liquidacion', 'url'=>array('index')),
	array('label'=>'Create Liquidacion', 'url'=>array('create')),
	array('label'=>'Update Liquidacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Liquidacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Liquidacion', 'url'=>array('admin')),
);
?>

<h1>View Liquidacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mes',
		'agno',
		'remuneracion_id_remuneracion',
		'dias_descuento',
		'sueldo_liquido',
		'descuento_afp',
		'descuento_apv',
		'descuento_cesante',
		'descuento_isapre',
		'descuento_fonasa',
		'descuento_imp_renta',
	),
)); ?>
