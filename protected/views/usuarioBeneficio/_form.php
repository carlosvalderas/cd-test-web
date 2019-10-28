<?php
/* @var $this UsuarioBeneficioController */
/* @var $model UsuarioBeneficio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-beneficio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model,'monto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'f_inicio'); ?>
		<?php echo $form->textField($model,'f_inicio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'f_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'f_fin'); ?>
		<?php echo $form->textField($model,'f_fin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'f_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beneficio_id_beneficio'); ?>
		<?php echo $form->textField($model,'beneficio_id_beneficio'); ?>
		<?php echo $form->error($model,'beneficio_id_beneficio'); ?>
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