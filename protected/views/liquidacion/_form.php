<?php
/* @var $this LiquidacionController */
/* @var $model Liquidacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'liquidacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mes'); ?>
		<?php echo $form->textField($model,'mes'); ?>
		<?php echo $form->error($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agno'); ?>
		<?php echo $form->textField($model,'agno'); ?>
		<?php echo $form->error($model,'agno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remuneracion_id_remuneracion'); ?>
		<?php echo $form->textField($model,'remuneracion_id_remuneracion'); ?>
		<?php echo $form->error($model,'remuneracion_id_remuneracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dias_descuento'); ?>
		<?php echo $form->textField($model,'dias_descuento'); ?>
		<?php echo $form->error($model,'dias_descuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sueldo_liquido'); ?>
		<?php echo $form->textField($model,'sueldo_liquido'); ?>
		<?php echo $form->error($model,'sueldo_liquido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descuento_afp'); ?>
		<?php echo $form->textField($model,'descuento_afp'); ?>
		<?php echo $form->error($model,'descuento_afp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descuento_apv'); ?>
		<?php echo $form->textField($model,'descuento_apv'); ?>
		<?php echo $form->error($model,'descuento_apv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descuento_cesante'); ?>
		<?php echo $form->textField($model,'descuento_cesante'); ?>
		<?php echo $form->error($model,'descuento_cesante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descuento_isapre'); ?>
		<?php echo $form->textField($model,'descuento_isapre'); ?>
		<?php echo $form->error($model,'descuento_isapre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descuento_fonasa'); ?>
		<?php echo $form->textField($model,'descuento_fonasa'); ?>
		<?php echo $form->error($model,'descuento_fonasa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descuento_imp_renta'); ?>
		<?php echo $form->textField($model,'descuento_imp_renta'); ?>
		<?php echo $form->error($model,'descuento_imp_renta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->