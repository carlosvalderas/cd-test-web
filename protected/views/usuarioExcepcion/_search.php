<?php
/* @var $this UsuarioExcepcionController */
/* @var $model UsuarioExcepcion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_usuario_excepcion'); ?>
		<?php echo $form->textField($model,'id_usuario_excepcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'f_inicio'); ?>
		<?php echo $form->textField($model,'f_inicio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'f_fin'); ?>
		<?php echo $form->textField($model,'f_fin',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excepcion_id_excepcion'); ?>
		<?php echo $form->textField($model,'excepcion_id_excepcion'); ?>
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