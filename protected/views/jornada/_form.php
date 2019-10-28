<?php
/* @var $this JornadaController */
/* @var $model Jornada */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jornada-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'h_entrada1'); ?>
		<?php echo $form->textField($model,'h_entrada1',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'h_entrada1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'h_salida1'); ?>
		<?php echo $form->textField($model,'h_salida1',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'h_salida1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'h_entrada2'); ?>
		<?php echo $form->textField($model,'h_entrada2',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'h_entrada2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'h_salida2'); ?>
		<?php echo $form->textField($model,'h_salida2',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'h_salida2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia_inicio'); ?>
		<?php echo $form->textField($model,'dia_inicio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'dia_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia_termino'); ?>
		<?php echo $form->textField($model,'dia_termino',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'dia_termino'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->