<?php
/* @var $this SituacionTituloController */
/* @var $model SituacionTitulo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'situacion-titulo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_situacion_ac'); ?>
		<?php echo $form->textField($model,'ID_situacion_ac'); ?>
		<?php echo $form->error($model,'ID_situacion_ac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_titulo'); ?>
		<?php echo $form->textField($model,'ID_titulo'); ?>
		<?php echo $form->error($model,'ID_titulo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->