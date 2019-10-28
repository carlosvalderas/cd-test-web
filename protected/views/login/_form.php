<?php
/* @var $this LoginController */
/* @var $model Login */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<?php
if(Yii::app()->user->hasFlash('Error')):
?>
    <div class="flash-error">
        <?php echo Yii::app()->user->getFlash('Error');?>
    </div>    
<?php   
endif;
?>

	<?php echo $form->errorSummary($model); ?>
        
        
        	<div class="row">
		<?php echo $form->labelEx($model,'Usuario'); ?>
		            <?php echo $form->dropDownList($model,'usuario_id_usuario', CHtml::listData($usuarios, 'id_usuario', 'Nombres'),
                    array(
                        'prompt'=>'Seleccione un Usuario',
                        'ajax' => array(
                            'type'=>'POST',
                            'url'=>CController::createUrl('//login/getCargoRut'),
                            'data'=>array('usuario_id'=>'js:this.value'),
                            'success' => "function(data){"
                                ."var respuesta = data;"
                            . "   var arrRespuesta = respuesta.split(';');  "
                                ."$('#cargo').val(arrRespuesta[0]);"
                                ."$('#rut').val(arrRespuesta[1]);"
                            . "}",
                        )
                    )
                ); ?>
		<?php echo $form->error($model,'usuario_id_usuario'); ?>
                    </div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'Cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>15,'maxlength'=>45,'readonly'=>'readonly','id'=>'cargo' ,'value'=>'')); ?>
                <?php //echo $form->dropDownList($model,'cargo',CHtml::listData(Authitem::model()->findAll(), 'name', 'description')); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>
                
                
		<?php echo $form->HiddenField($model,'nombre',array('size'=>20,'maxlength'=>45,'id'=>'nombre','value'=>'')); ?>
        
                <?php echo $form->HiddenField($model,'id_rut',array('size'=>45,'maxlength'=>45,'id'=>'rut','value'=>'')); ?>
		
        
        
        	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'pass',array('size'=>20, 'maxlength'=>15, 'minlength'=>4, 'id'=>'pass')); ?>
		<?php echo $form->error($model,'password'); ?>
                </div>
        
                <div class="row">
		<?php echo $form->labelEx($model,'repita password'); ?>
		<?php echo CHtml::passwordField("x_pass", '' ,array('maxlength'=>15, 'minlength'=>4));?>
		<?php echo $form->error($model,'password'); ?>
                </div>
                
                
                    
                    
                </div>
        

        
        
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array('class'=>'btn', 'id'=>'btncrealogin')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<style type="text/css">
	#btncrealogin
	{
		margin-left: 30px !important;
	}
</style>
    
    