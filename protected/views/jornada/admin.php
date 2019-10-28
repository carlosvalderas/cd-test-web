<?php
/* @var $this JornadaController */
/* @var $model Jornada */

$this->breadcrumbs=array(
	'Jornadas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Jornada', 'url'=>array('index')),
	array('label'=>'Create Jornada', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jornada-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Jornadas</h1>

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
	'id'=>'jornada-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_jornada',
		'nombre',
		'h_entrada1',
		'h_salida1',
		'h_entrada2',
		'h_salida2',
		/*
		'dia_inicio',
		'dia_termino',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
