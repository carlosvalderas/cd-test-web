<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>
        
        
        <div class="row">
            <fieldset> <legend>Fecha</legend>
            <?php echo CHtml::textfield('ciudad','',array('size'=>5, 'readonly'=>true)); ?>
            <?php echo $form->textField($model,'dia',array('size'=>1, 'value'=>date('d'), 'readonly'=>true)); ?>- 
            <?php echo $form->textField($model,'mes',array('size'=>1, 'value'=>date('m'), 'readonly'=>true)); ?>- 
            <?php echo $form->textField($model,'año',array('size'=>1, 'value'=>date('Y'), 'readonly'=>true)); ?>
            </fieldset>
            </div>
        
        <div class="row">
            <fieldset><legend>Datos empresa</legend>
                Razon social <?php echo CHtml::textField('razon', '' ,array('size'=>5, 'readonly'=>true)); ?>
                
                Rut <?php echo CHtml::textField('rut_empresa',  '' ,array('readonly'=>true)); ?>
                
                Representante Legal <?php echo CHtml::textField('representante', '' ,array('readonly'=>true)); ?>
                
                Rut <?php echo CHtml::textField('rut_re', '' ,array('readonly'=>true)); ?>
                
                Direccion <?php echo CHtml::textField('direccion_e', '' ,array('readonly'=>true)); ?>
                
                Ciudad <?php echo CHtml::textField('ciudad_e', '' ,array('readonly'=>true)); ?>
                
            </fieldset>
        </div>
        
        <div class="row">
            <fieldset><legend>Datos empleado</legend>
                Rut <?php echo CHtml::textField('rut_usuario', '' ,array('readonly'=>true)); ?>
                
                Nombre <?php echo CHtml::textField('nombre', '' ,array('readonly'=>true)); ?>
                
                Nacionalidad <?php echo CHtml::textField('nacionalidad', '' ,array('readonly'=>true)); ?>
                
                Dia <?php echo CHtml::textField('d_nac', '' ,array('readonly'=>true)); ?>
                
                Mes <?php echo CHtml::textField('m_nac', '' ,array('readonly'=>true)); ?>
                
                Año <?php echo CHtml::textField('a_nac', '' ,array('readonly'=>true)); ?>
                
                Direccion <?php echo CHtml::textField('direccion', '' ,array('readonly'=>true)); ?>
                
                Comuna <?php echo CHtml::textField('ciudad_u', '' ,array('readonly'=>true)); ?>
                
            </fieldset>
        </div>
	
        <div class="row">
            <fieldset><legend>Datos del Contrato</legend>
                Servicio <?php echo $form->textField($model,'servicios',array('size'=>45)); ?>
                
                Condiciones <?php echo $form->textField($model,'condiciones',array('size'=>45)); ?>
                
                Jornada <?php echo $form->textField($model,'servicios',array('size'=>1)); ?>
                
                Dias abandono <?php echo $form->textField($model,'servicios',array('size'=>1)); ?>
                
                dia termino <?php echo $form->textField($model,'dia_termino',array('size'=>1)); ?>
                
                mes termino <?php echo $form->textField($model,'mes_termino',array('size'=>1)); ?>
                
                año termino <?php echo $form->textField($model,'año_termino',array('size'=>1)); ?>
                
                ejemplares <?php echo $form->textField($model,'ejemplares',array('size'=>1, 'value'=>'2')); ?>
                
            </fieldset>
        </div>
        
        <div class="row">
            <fieldset><legend>Beneficios</legend>
                
                
                
            </fieldset>
        </div>
        
        <div class="row">
            <fieldset><legend>Remuneracion</legend>
                
                
            </fieldset>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                
	</div>
            
<?php $this->endWidget(); ?>

</div><!-- form -->



