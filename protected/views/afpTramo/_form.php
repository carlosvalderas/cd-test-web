<?php
/* @var $this AfpTramoController */
/* @var $model AfpTramo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'afp-tramo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentaje'); ?>
		<?php echo $form->textField($model,'porcentaje',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'porcentaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'afp_id_afp'); ?>
		<?php echo $form->textField($model,'afp_id_afp'); ?>
		<?php echo $form->error($model,'afp_id_afp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tramo_id'); ?>
		<?php echo $form->textField($model,'tramo_id'); ?>
		<?php echo $form->error($model,'tramo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->