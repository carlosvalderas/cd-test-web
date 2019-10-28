<?php
/* @var $this UsuarioBeneficioController */
/* @var $model UsuarioBeneficio */

$this->breadcrumbs=array(
	'Usuario Beneficios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UsuarioBeneficio', 'url'=>array('index')),
	array('label'=>'Create UsuarioBeneficio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-beneficio-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Usuario Beneficios</h1>

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
	'id'=>'usuario-beneficio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_usuario_beneficio',
		'monto',
		'f_inicio',
		'f_fin',
		'beneficio_id_beneficio',
		'usuario_id_usuario',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
