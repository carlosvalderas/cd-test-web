<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_estudiante'); ?>
		<?php echo $form->textField($model,'id_estudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesor_guia'); ?>
		<?php echo $form->textField($model,'profesor_guia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empresa_id_empresa'); ?>
		<?php echo $form->textField($model,'Empresa_id_empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institucion_id_institucion'); ?>
		<?php echo $form->textField($model,'institucion_id_institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carrera_id_carrera'); ?>
		<?php echo $form->textField($model,'carrera_id_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'situacion_academica_id_situacion_academica'); ?>
		<?php echo $form->textField($model,'situacion_academica_id_situacion_academica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_id_usuario'); ?>
		<?php echo $form->textField($model,'usuario_id_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->