<?php
/* @var $this ContratoEstudianteController */
/* @var $model ContratoEstudiante */

$this->breadcrumbs=array(
	'Contrato Estudiantes'=>array('index'),
	$model->id_contrato_estudiante=>array('view','id'=>$model->id_contrato_estudiante),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContratoEstudiante', 'url'=>array('index')),
	array('label'=>'Create ContratoEstudiante', 'url'=>array('create')),
	array('label'=>'View ContratoEstudiante', 'url'=>array('view', 'id'=>$model->id_contrato_estudiante)),
	array('label'=>'Manage ContratoEstudiante', 'url'=>array('admin')),
);
?>

<h1>Update ContratoEstudiante <?php echo $model->id_contrato_estudiante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>