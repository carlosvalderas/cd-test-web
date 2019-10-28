<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'profesor_guia'); ?>
		<?php echo $form->textField($model,'profesor_guia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'profesor_guia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empresa_id_empresa'); ?>
		<?php echo $form->textField($model,'Empresa_id_empresa'); ?>
		<?php echo $form->error($model,'Empresa_id_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'institucion_id_institucion'); ?>
		<?php echo $form->textField($model,'institucion_id_institucion'); ?>
		<?php echo $form->error($model,'institucion_id_institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carrera_id_carrera'); ?>
		<?php echo $form->textField($model,'carrera_id_carrera'); ?>
		<?php echo $form->error($model,'carrera_id_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'situacion_academica_id_situacion_academica'); ?>
		<?php echo $form->textField($model,'situacion_academica_id_situacion_academica'); ?>
		<?php echo $form->error($model,'situacion_academica_id_situacion_academica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_id_usuario'); ?>
		<?php echo $form->textField($model,'usuario_id_usuario'); ?>
		<?php echo $form->error($model,'usuario_id_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->