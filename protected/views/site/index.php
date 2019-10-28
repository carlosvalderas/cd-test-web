<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<?php Yii::app()->getSession()->add('ide', $model->id_usuario);?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asd',
	'enableAjaxValidation'=>false,
        'action'=>Yii::app()->createUrl('site/index'),
)); ?>

<?php echo CHtml::textField('Text1', '',array('placeholder'=>'hora 1')); ?>
<?php echo CHtml::textField('Text2', '',array('placeholder'=>'hora 2')); ?><br>
<?php echo CHtml::textField('Text3', '',array('placeholder'=>'hora 3')); ?>
<?php echo CHtml::textField('Text4', '',array('placeholder'=>'hora 4')); ?><br>
<?php echo CHtml::textField('Text5', '',array('placeholder'=>'hora 5')); ?>
<?php echo CHtml::textField('Text6', '',array('placeholder'=>'hora 6')); ?><br>
<?php echo CHtml::textField('Text7', '',array('placeholder'=>'hora 7')); ?>
<?php echo CHtml::textField('Text8', '',array('placeholder'=>'hora 8')); ?><br>
<?php echo CHtml::textField('Text9', '',array('placeholder'=>'hora 9')); ?>
<?php echo CHtml::textField('Text10', '',array('placeholder'=>'hora 10')); ?><br>
<?php echo CHtml::textField('Text11', '',array('placeholder'=>'hora 11')); ?>
<?php echo CHtml::textField('Text12', '',array('placeholder'=>'hora 12')); ?><br><br>

<?php //echo CHtml::textField('1Text1', '',array('placeholder'=>'resultado 1')); ?>
<?php //echo CHtml::textField('1Text2', '',array('placeholder'=>'resultado 2')); ?>
<?php //echo CHtml::textField('1Text3', '',array('placeholder'=>'resultado 3')); ?>
<?php //echo CHtml::textField('1Text4', '',array('placeholder'=>'resultado 4')); ?>
<?php //echo CHtml::textField('1Text5', '',array('placeholder'=>'resultado 5')); ?>
<?php //echo CHtml::textField('1Text6', '',array('placeholder'=>'resultado 6')); ?>

<?php echo CHtml::textField('total', '',array('placeholder'=>'Total')); ?>

<?php echo CHtml::submitButton($model->isNewRecord ? 'Update' : 'Calcular'); ?>
<?php $this->endWidget(); ?>