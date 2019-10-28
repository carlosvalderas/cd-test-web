<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_contrato'); ?>
		<?php echo $form->textField($model,'id_contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dia'); ?>
		<?php echo $form->textField($model,'dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mes'); ?>
		<?php echo $form->textField($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio'); ?>
		<?php echo $form->textField($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condiciones'); ?>
		<?php echo $form->textField($model,'condiciones',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dias_abandono'); ?>
		<?php echo $form->textField($model,'dias_abandono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ejemplares'); ?>
		<?php echo $form->textField($model,'ejemplares'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jornada_id_jornada'); ?>
		<?php echo $form->textField($model,'jornada_id_jornada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario_id_usuario'); ?>
		<?php echo $form->textField($model,'usuario_id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'servicios'); ?>
		<?php echo $form->textField($model,'servicios',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dia_termino'); ?>
		<?php echo $form->textField($model,'dia_termino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mes_termino'); ?>
		<?php echo $form->textField($model,'mes_termino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_termino'); ?>
		<?php echo $form->textField($model,'anio_termino'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->