<?php
/* @var $this ContratoEstudianteController */
/* @var $model ContratoEstudiante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_contrato_estudiante'); ?>
		<?php echo $form->textField($model,'id_contrato_estudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ciudad'); ?>
		<?php echo $form->textField($model,'id_ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dia'); ?>
		<?php echo $form->textField($model,'dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mes'); ?>
		<?php echo $form->textField($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'año'); ?>
		<?php echo $form->textField($model,'año'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_estudiante'); ?>
		<?php echo $form->textField($model,'id_estudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condiciones'); ?>
		<?php echo $form->textField($model,'condiciones',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horas'); ?>
		<?php echo $form->textField($model,'horas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_jornada'); ?>
		<?php echo $form->textField($model,'id_jornada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_beneficio'); ?>
		<?php echo $form->textField($model,'id_beneficio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dias_abandono'); ?>
		<?php echo $form->textField($model,'dias_abandono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ejemplares'); ?>
		<?php echo $form->textField($model,'ejemplares'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jornada_id_jornada'); ?>
		<?php echo $form->textField($model,'jornada_id_jornada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jornada_Empleado_id_empleado'); ?>
		<?php echo $form->textField($model,'jornada_Empleado_id_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jornada_Empleado_Empresa_id_empresa'); ?>
		<?php echo $form->textField($model,'jornada_Empleado_Empresa_id_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institucion_id_institucion'); ?>
		<?php echo $form->textField($model,'institucion_id_institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beneficio_id_beneficio'); ?>
		<?php echo $form->textField($model,'beneficio_id_beneficio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->