<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'renta_bruta'); ?>
		<?php echo $form->textField($model,'renta_bruta'); ?>
		<?php echo $form->error($model,'renta_bruta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'renta_liquida'); ?>
		<?php echo $form->textField($model,'renta_liquida'); ?>
		<?php echo $form->error($model,'renta_liquida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empresa_id_empresa'); ?>
		<?php echo $form->textField($model,'Empresa_id_empresa'); ?>
		<?php echo $form->error($model,'Empresa_id_empresa'); ?>
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