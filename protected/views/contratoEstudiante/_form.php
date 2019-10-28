<?php
/* @var $this ContratoEstudianteController */
/* @var $model ContratoEstudiante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-estudiante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ciudad'); ?>
		<?php echo $form->textField($model,'id_ciudad'); ?>
		<?php echo $form->error($model,'id_ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia'); ?>
		<?php echo $form->textField($model,'dia'); ?>
		<?php echo $form->error($model,'dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mes'); ?>
		<?php echo $form->textField($model,'mes'); ?>
		<?php echo $form->error($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'año'); ?>
		<?php echo $form->textField($model,'año'); ?>
		<?php echo $form->error($model,'año'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estudiante'); ?>
		<?php echo $form->textField($model,'id_estudiante'); ?>
		<?php echo $form->error($model,'id_estudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'condiciones'); ?>
		<?php echo $form->textField($model,'condiciones',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'condiciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horas'); ?>
		<?php echo $form->textField($model,'horas',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'horas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jornada'); ?>
		<?php echo $form->textField($model,'id_jornada'); ?>
		<?php echo $form->error($model,'id_jornada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_beneficio'); ?>
		<?php echo $form->textField($model,'id_beneficio'); ?>
		<?php echo $form->error($model,'id_beneficio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dias_abandono'); ?>
		<?php echo $form->textField($model,'dias_abandono'); ?>
		<?php echo $form->error($model,'dias_abandono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ejemplares'); ?>
		<?php echo $form->textField($model,'ejemplares'); ?>
		<?php echo $form->error($model,'ejemplares'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jornada_id_jornada'); ?>
		<?php echo $form->textField($model,'jornada_id_jornada'); ?>
		<?php echo $form->error($model,'jornada_id_jornada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jornada_Empleado_id_empleado'); ?>
		<?php echo $form->textField($model,'jornada_Empleado_id_empleado'); ?>
		<?php echo $form->error($model,'jornada_Empleado_id_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jornada_Empleado_Empresa_id_empresa'); ?>
		<?php echo $form->textField($model,'jornada_Empleado_Empresa_id_empresa'); ?>
		<?php echo $form->error($model,'jornada_Empleado_Empresa_id_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institucion_id_institucion'); ?>
		<?php echo $form->textField($model,'institucion_id_institucion'); ?>
		<?php echo $form->error($model,'institucion_id_institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beneficio_id_beneficio'); ?>
		<?php echo $form->textField($model,'beneficio_id_beneficio'); ?>
		<?php echo $form->error($model,'beneficio_id_beneficio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->