<?php
/* @var $this ContratoEstudianteController */
/* @var $model ContratoEstudiante */

$this->breadcrumbs=array(
	'Contrato Estudiantes'=>array('index'),
	$model->id_contrato_estudiante,
);

$this->menu=array(
	array('label'=>'List ContratoEstudiante', 'url'=>array('index')),
	array('label'=>'Create ContratoEstudiante', 'url'=>array('create')),
	array('label'=>'Update ContratoEstudiante', 'url'=>array('update', 'id'=>$model->id_contrato_estudiante)),
	array('label'=>'Delete ContratoEstudiante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_contrato_estudiante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContratoEstudiante', 'url'=>array('admin')),
);
?>

<h1>View ContratoEstudiante #<?php echo $model->id_contrato_estudiante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_contrato_estudiante',
		'id_ciudad',
		'dia',
		'mes',
		'año',
		'id_estudiante',
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
	),
)); ?>
