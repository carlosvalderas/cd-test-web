<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_empresa'); ?>
		<?php echo $form->textField($model,'id_empresa'); ?>
		<?php echo $form->error($model,'id_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razon'); ?>
		<?php echo $form->textField($model,'razon',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'razon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rut_representante'); ?>
		<?php echo $form->textField($model,'rut_representante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'rut_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_representante'); ?>
		<?php echo $form->textField($model,'nombre_representante',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'domicilio'); ?>
		<?php echo $form->textField($model,'domicilio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'domicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->