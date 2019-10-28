<?php
/* @var $this RemuneracionController */
/* @var $model Remuneracion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_remuneracion'); ?>
		<?php echo $form->textField($model,'id_remuneracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sueldo_bruto'); ?>
		<?php echo $form->textField($model,'sueldo_bruto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcent_afp'); ?>
		<?php echo $form->textField($model,'porcent_afp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcent_apv'); ?>
		<?php echo $form->textField($model,'porcent_apv'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcent_cesante'); ?>
		<?php echo $form->textField($model,'porcent_cesante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcent_isapre'); ?>
		<?php echo $form->textField($model,'porcent_isapre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcent_fonasa'); ?>
		<?php echo $form->textField($model,'porcent_fonasa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imp_renta'); ?>
		<?php echo $form->textField($model,'imp_renta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isapre_id_isapre'); ?>
		<?php echo $form->textField($model,'isapre_id_isapre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_id_usuario'); ?>
		<?php echo $form->textField($model,'usuario_id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'afp_tramo_id'); ?>
		<?php echo $form->textField($model,'afp_tramo_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->