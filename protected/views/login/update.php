<?php
/* @var $this LoginController */
/* @var $model Login */

$this->breadcrumbs=array(
	'Logins'=>array('index'),
	$model->id_rut=>array('view','id'=>$model->id_rut),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Login', 'url'=>array('index')),
);
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-change',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
    <?php $userio =  Usuario::model()->findByAttributes(array('rut'=>$model->id_rut)); ?>
    <h1>Cambiar contraseña de <?php echo $userio->Nombres.' '.$userio->apellido_p ;?></h1>
    
    <?php
if(Yii::app()->user->hasFlash('Error')):
?>
    <div class="flash-error">
        <?php echo Yii::app()->user->getFlash('Error');?>
    </div>    
<?php   
endif;
?>
    
<div class="row">
<?php echo CHtml::label('Contraseña antigua',''); ?>
<?php echo $form->passwordField($model,'pass',array('size'=>20,'maxlength'=>20, 'value'=>'')); ?><br/><br/>
<?php echo CHtml::label('Nueva contraseña',''); ?>
<?php echo CHtml::passwordField('new_pass','',array('size'=>20,'maxlength'=>20)); ?><br/><br/>
<?php echo CHtml::label('Repita su nueva contraseña',''); ?>
<?php echo CHtml::passwordField('rep_pass','',array('size'=>20,'maxlength'=>20)); ?><br/><br/>
</div>
    
<div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
</div>
    
<?php $this->endWidget(); ?>
    
</div><!-- form -->





