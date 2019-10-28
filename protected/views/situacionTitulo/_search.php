<?php
/* @var $this SituacionTituloController */
/* @var $model SituacionTitulo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_situacion_ac'); ?>
		<?php echo $form->textField($model,'ID_situacion_ac'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_titulo'); ?>
		<?php echo $form->textField($model,'ID_titulo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->