<?php
/* @var $this UsuarioExcepcionController */
/* @var $model UsuarioExcepcion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-excepcion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row">
                <?php echo $form->Dropdownlist($model,'usuario_id_usuario', 
                        CHtml::listData(Usuario::model()->listabene(), 'id_usuario', 'Nombres'),
                        array('prompt'=>'Seleccione Empleado',)); ?>
                <?php echo $form->error($model,'usuario_id_usuario'); ?>
	</div>

        <div class="row">
                
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                   'model'=>$model,
                   'attribute'=>'f_inicio',
                   'value'=>$model->f_inicio,
                   'language' => 'es',
                   'htmlOptions' => array('readonly'=>"readonly", 'id'=>'f_inicio', 'placeholder'=>'Fecha inicio'),
                   'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$model->f_inicio,
                    'dateFormat'=>'dd-mm-yy',
                    'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.jpg',
                    'buttonImageOnly'=>true,
                    'buttonText'=>'Fecha',
                    'selectOtherMonths'=>true,
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'showOn'=>'button', 
                    'showOtherMonths'=>true, 
                    'changeMonth' => 'true', 
                    'changeYear' => 'true', 
                    'minDate'=>'date("d-m-Y")', 
                    'maxDate'=> "+20Y",
                    'onClose' => new CJavaScriptExpression('function (selectedDate) { $("#f_fin").datepicker("option", "minDate", selectedDate); }'),
                    ),
                  )); 
                 ?>
        </div>
        
	<div class="row">
		
		 <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                   'model'=>$model,
                   'attribute'=>'f_fin',
                   'value'=>$model->f_fin,
                   'language' => 'es',
                   'htmlOptions' => array('readonly'=>"readonly", 'id'=>'f_fin', 'placeholder'=>'Fecha término'),
                   'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$model->f_fin,
                    'dateFormat'=>'dd-mm-yy',
                    'buttonImage'=>Yii::app()->baseUrl.'/images/calendario.jpg',
                    'buttonImageOnly'=>true,
                    'buttonText'=>'Fecha',
                    'selectOtherMonths'=>true,
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true,
                    'showOn'=>'button', 
                    'showOtherMonths'=>true, 
                    'changeMonth' => 'true', 
                    'changeYear' => 'true', 
                    'minDate'=>'date("d-m-Y")', 
                    'maxDate'=> "+20Y",
                    //'onClose' => new CJavaScriptExpression('function (selectedDate) { $("#f_inicio").datepicker("option", "minDate", selectedDate); }'),
                    ),
                  )); 
                 ?>
	</div>

	<div class="row">
		<?php echo $form->Dropdownlist($model,'excepcion_id_excepcion', 
                        CHtml::listData(Excepcion::model()->findAll(), 'id_excepcion', 'nombre'),
                        array('prompt'=>'Seleccione una excepción',)); ?>
		<?php echo $form->error($model,'excepcion_id_excepcion'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
