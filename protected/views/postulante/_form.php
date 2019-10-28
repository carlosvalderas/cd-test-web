<?php
/* @var $this PostulanteController */
/* @var $model Postulante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'postulante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_situacion'); ?>
		<?php echo $form->textField($model,'id_situacion'); ?>
		<?php echo $form->error($model,'id_situacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacion_adicional'); ?>
		<?php echo $form->textField($model,'informacion_adicional',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'informacion_adicional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'renta_esperada'); ?>
		<?php echo $form->textField($model,'renta_esperada'); ?>
		<?php echo $form->error($model,'renta_esperada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referencias'); ?>
		<?php echo $form->textField($model,'referencias',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'referencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empresa_id_empresa'); ?>
		<?php echo $form->textField($model,'Empresa_id_empresa'); ?>
		<?php echo $form->error($model,'Empresa_id_empresa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->