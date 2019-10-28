<?php
/* @var $this LiquidacionController */
/* @var $model Liquidacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mes'); ?>
		<?php echo $form->textField($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agno'); ?>
		<?php echo $form->textField($model,'agno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remuneracion_id_remuneracion'); ?>
		<?php echo $form->textField($model,'remuneracion_id_remuneracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dias_descuento'); ?>
		<?php echo $form->textField($model,'dias_descuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sueldo_liquido'); ?>
		<?php echo $form->textField($model,'sueldo_liquido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descuento_afp'); ?>
		<?php echo $form->textField($model,'descuento_afp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descuento_apv'); ?>
		<?php echo $form->textField($model,'descuento_apv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descuento_cesante'); ?>
		<?php echo $form->textField($model,'descuento_cesante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descuento_isapre'); ?>
		<?php echo $form->textField($model,'descuento_isapre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descuento_fonasa'); ?>
		<?php echo $form->textField($model,'descuento_fonasa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descuento_imp_renta'); ?>
		<?php echo $form->textField($model,'descuento_imp_renta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->