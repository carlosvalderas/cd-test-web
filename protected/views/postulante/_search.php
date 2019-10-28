<?php
/* @var $this PostulanteController */
/* @var $model Postulante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_postulante'); ?>
		<?php echo $form->textField($model,'id_postulante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_situacion'); ?>
		<?php echo $form->textField($model,'id_situacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacion_adicional'); ?>
		<?php echo $form->textField($model,'informacion_adicional',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'renta_esperada'); ?>
		<?php echo $form->textField($model,'renta_esperada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'referencias'); ?>
		<?php echo $form->textField($model,'referencias',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empresa_id_empresa'); ?>
		<?php echo $form->textField($model,'Empresa_id_empresa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->