<?php
/* @var $this SiteController */
/* @var $model Login */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Logearse';
?>

<?php
if(Yii::app()->user->hasFlash('Error')):
?>
    <div class="flash-error">
        <?php echo Yii::app()->user->getFlash('Error');?>
    </div>    
<?php   
endif;
?>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'logearse-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RUT'); ?>
		<?php echo $form->textField($model,'id_rut', array('maxlength'=>8, 'minlength'=>7, 'class'=>'numberinput')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CLAVE'); ?>
		<?php echo $form->passwordField($model,'pass', array('maxlength'=>15, 'minlength'=>4,)); ?>
		<p class="hint">
			Ingrese su Rut sin guión ni dígito verificador.
                        
		</p>
		<p class="hint">
                        <kbd>Ejemplo: 12.345.678-9</kbd> => <kbd>12345678</kbd>
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Entrar', array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
<script type="text/javascript">
$(document).ready(function () {
    $('input.numberinput').bind('keypress', function (e) 
    {
        return !(e.which != 8 && e.which != 0 &&
                (e.which < 48 || e.which > 57));

    });
});
</script>
