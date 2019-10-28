<?php
/* @var $this RemuneracionController */
/* @var $model Remuneracion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'remuneracion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sueldo_bruto'); ?>
		<?php echo $form->textField($model,'sueldo_bruto'); ?>
		<?php echo $form->error($model,'sueldo_bruto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcent_afp'); ?>
		<?php echo $form->textField($model,'porcent_afp'); ?>
		<?php echo $form->error($model,'porcent_afp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcent_apv'); ?>
		<?php echo $form->textField($model,'porcent_apv'); ?>
		<?php echo $form->error($model,'porcent_apv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcent_cesante'); ?>
		<?php echo $form->textField($model,'porcent_cesante'); ?>
		<?php echo $form->error($model,'porcent_cesante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcent_isapre'); ?>
		<?php echo $form->textField($model,'porcent_isapre'); ?>
		<?php echo $form->error($model,'porcent_isapre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcent_fonasa'); ?>
		<?php echo $form->textField($model,'porcent_fonasa'); ?>
		<?php echo $form->error($model,'porcent_fonasa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imp_renta'); ?>
		<?php echo $form->textField($model,'imp_renta'); ?>
		<?php echo $form->error($model,'imp_renta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isapre_id_isapre'); ?>
		<?php echo $form->textField($model,'isapre_id_isapre'); ?>
		<?php echo $form->error($model,'isapre_id_isapre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_id_usuario'); ?>
		<?php echo $form->textField($model,'usuario_id_usuario'); ?>
		<?php echo $form->error($model,'usuario_id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'afp_tramo_id'); ?>
		<?php echo $form->textField($model,'afp_tramo_id'); ?>
		<?php echo $form->error($model,'afp_tramo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->