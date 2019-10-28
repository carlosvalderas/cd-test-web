<?php
/* @var $this RemuneracionController */
/* @var $model Remuneracion */

$this->breadcrumbs=array(
	'Remuneracions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Remuneracion', 'url'=>array('index')),
	array('label'=>'Create Remuneracion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#remuneracion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Remuneracions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'remuneracion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_remuneracion',
		'sueldo_bruto',
		'porcent_afp',
		'porcent_apv',
		'porcent_cesante',
		'porcent_isapre',
		/*
		'porcent_fonasa',
		'imp_renta',
		'isapre_id_isapre',
		'usuario_id_usuario',
		'afp_tramo_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
