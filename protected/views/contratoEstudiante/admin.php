<?php
/* @var $this ContratoEstudianteController */
/* @var $model ContratoEstudiante */

$this->breadcrumbs=array(
	'Contrato Estudiantes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ContratoEstudiante', 'url'=>array('index')),
	array('label'=>'Create ContratoEstudiante', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contrato-estudiante-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Contrato Estudiantes</h1>

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
	'id'=>'contrato-estudiante-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_contrato_estudiante',
		'id_ciudad',
		'dia',
		'mes',
		'año',
		'id_estudiante',
		/*
		'condiciones',
		'horas',
		'id_jornada',
		'id_beneficio',
		'dias_abandono',
		'ejemplares',
		'jornada_id_jornada',
		'jornada_Empleado_id_empleado',
		'jornada_Empleado_Empresa_id_empresa',
		'institucion_id_institucion',
		'beneficio_id_beneficio',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
