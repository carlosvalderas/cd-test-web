<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php //echo $form->errorSummary($model); ?>
        <fieldset> <legend align="left">DATOS PERSONALES</legend>
            
	<div class="row">
            
		<?php echo $form->labelEx($model,'Nombres '); ?>
		<?php echo $form->textField($model,'Nombres',array('size'=>25,'maxlength'=>45, 'class'=>'nombre')); ?>
		<?php echo $form->error($model,'Nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellidos'); ?>
		<?php echo $form->textField($model,'apellido_p',array('size'=>10, 'class'=>'ap')); ?>
		
		<?php echo $form->textField($model,'apellido_m',array('size'=>10, 'class'=>'ap')); ?>
                <?php echo $form->error($model,'apellido_p'); ?>
		<?php echo $form->error($model,'apellido_m'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Rut'); ?>
		<?php echo $form->textField($model,'rut',array('minlength'=>7,'maxlength'=>8, 'class' => 'rut')); ?>
		- <?php echo $form->textField($model,'dv',array('maxlength'=>1, 'class'=>'dv')); ?>
		<?php echo $form->error($model,'rut'); ?>
                <?php echo $form->error($model,'dv'); ?>
	</div>
        <div class="clear"></div>

	
        <div class="row">
		<?php echo $form->labelEx($model,'Fecha Nacimiento'); ?>
		<?php echo CHtml::dropDownList ('d_nac', '' , 
                        array('01'=>'01','02' => '02','03' => '03','04' =>'04','05'=>'05',
                        '06'=>'06','07' => '07','08' => '08','09' =>'09','10'=>'10',
                        '11'=>'11','12' => '12','13' => '13','14' =>'14','15'=>'15',
                        '16'=>'16','17' => '17','18' => '18','19' =>'19','20'=>'20',
                        '21'=>'21','22' => '22','23' => '23','23' =>'23','24'=>'24',
                        '25'=>'25','26' => '26','27' => '27','28' =>'28','29'=>'29',
                        '30'=>'30','31' => '31'),
                        array('empty' => 'Dia', 'class'=>'dia')); 
                ?>
		<?php echo CHtml::dropDownList ('m_nac','',
                        array('01'=>'Enero','02' => 'Febrero','03' => 'Marzo','04' =>'Abril',
                        '05'=>'Mayo','06'=>'Junio','07' => 'Julio','08' => 'Agosto','09' =>'Septiembre',
                        '10'=>'Octubre','11' => 'Noviembre','12' => 'Diciembre'),
                        array('empty' => 'Mes', 'class'=> 'ap')); 
                ?>
		<?php echo $form->textField($model,'a_nac',array('size'=>4,'maxlength'=>45, 'placeholder'=>'Año', 'class'=>'dia'));?>
                <?php echo $form->error($model,'d_nac'); ?>
                <?php echo $form->error($model,'m_nac'); ?>
		<?php echo $form->error($model,'a_nac'); ?>
        </div>
        
        
        <div class="row">
		<?php echo $form->labelEx($model,'Nacionalidad'); ?>
		<?php echo CHtml::dropDownList ('nacionalidad','',
                        array('Argentina'=>'Argentina','Chilena' => 'Chilena','Peruana' => 'Peruana','Boliviana' =>'Boliviana','Brasileña'=>'Brasileña'),
                        array('empty' => 'Seleccione Nacionalidad')); 
                ?>
		<?php echo $form->error($model,'nacionalidad'); ?>
        </div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'Estado Civil'); ?>
		<?php echo CHtml::dropDownList('estado_civil', '', 
              array('Casado' => 'Casado', 'Soltero' => 'Soltero','Viudo' =>'Viudo','Separado'=>'Separado'),
              array('empty' => 'Seleccione Estado Civil')); 
                ?>
		<?php echo $form->error($model,'estado_civil'); ?>
        </div>
        </fieldset>
        
        <fieldset> <legend align="left">DATOS DE CONTACTO</legend>
            
	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'Ciudad'); ?>
		<?php echo $form->dropDownList($model,'ciudad_id_ciudad',
                        CHtml::listData($ciudad,'id_ciudad','nombre'),
                        array('prompt'=>"Seleccione Ciudad")); ?>
		<?php echo $form->error($model,'ciudad_id_ciudad'); ?>
	</div>

        <div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>
            
	<div class="row">
		<?php echo $form->labelEx($model,'Mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>25,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>
        
        </fieldset>
        <fieldset> <legend align="left">DATOS ESPECIFICOS</legend>
        <div class="row">
            Empleado: <input class="tipo" id="tipo_empleado" type="radio" name="tipo" value="Empleado"/>
            Estudiante: <input class="tipo" id="tipo_estudiante" type="radio" name="tipo" value="Estudiante"/>
                
        </div>

	<div class="row" id="cargo">
		<?php echo $form->labelEx($model,'cargo_id_cargo'); ?>
		<?php echo $form->dropDownList($model,'cargo_id_cargo',
                        CHtml::listData($cargos, 'id_cargo', 'nombre'),
                        array('prompt'=>"Seleccione Cargo")); ?>
		<?php echo $form->error($model,'cargo_id_cargo'); ?>
	
                <?php echo $form->labelEx($model,'seccion_idseccion'); ?>
		<?php echo $form->dropDownList($model,'seccion_idseccion',
                        CHtml::listData($seccions, 'idseccion', 'nombre_sec'),
                        array('prompt'=>"Seleccione Sección")); ?>
		<?php echo $form->error($model,'cargo_id_cargo'); ?>
		
	</div>
        
        
        
        <div id="datos_estudiantiles">
            
            <div class="row">
		<?php echo $form->label($estudiante,'profesor_guia'); ?>
		<?php echo $form->textField($estudiante,'profesor_guia',array('size'=>32,'maxlength'=>45)); ?>
		<?php echo $form->error($estudiante,'profesor_guia'); ?>
	</div>
            
        <div class="row">
		<?php echo $form->label($estudiante,'institucion_id_institucion'); ?>
		<?php echo $form->dropDownList($estudiante,'institucion_id_institucion',
                        CHtml::listData($instituciones,'id_institucion','nombre'),
                        array('prompt'=>"Seleccione Institución")); ?>
		<?php echo $form->error($estudiante,'id_institucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($estudiante,'Carrera'); ?>
		<?php echo $form->dropDownList($estudiante,'carrera_id_carrera',
                        CHtml::listData($carreras,'id_carrera','nombre'),
                        array('prompt'=>"Seleccione Carrera")); ?>
		<?php echo $form->error($estudiante,'carrera_id_carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($estudiante,'situacion_academica_id_situacion_academica'); ?>
		<?php echo $form->dropDownList($estudiante,'situacion_academica_id_situacion_academica',
                        CHtml::listData($situaciones,'id_situacion_academica','nombre'),
                        array('prompt'=>"Seleccione Situación")); ?>
		<?php echo $form->error($estudiante,'situacion_academica_id_situacion_academica'); ?>
	</div>
	</div>
        
	<div class="row">
		<?php //echo $form->labelEx($model,'Huella'); ?>
		<?php //echo $form->textField($model,'Huella',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'Huella'); ?>
	</div>
        
        </fieldset>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save', array('class'=>'btn')); ?>
                
        
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
$(document).ready(function(e){
    $('#cargo').hide();
    $('#datos_estudiantiles').hide();
    $('.tipo').click(function(ev){
        if($("#tipo_empleado").is(":checked")){
            $('#cargo').show();
            $('#datos_estudiantiles').hide();
        }
        else{
            $('#cargo').hide();
            $('#datos_estudiantiles').show();
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
    $('input.dv').bind('keypress', function (e) 
    {
        return !(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) || e.which == 107;
    });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
    $('input.rut').bind('keypress', function (e) 
    {
        return !(e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57));

    });
});
</script>
<style>
    .nombre{
        width:200px !important;
    }
    .ap{
        width:150px !important;
    }
    .rut{
        width:80px !important;
    }
    .dv{
        width:12px !important;
    }
    .dia{
        width:70px !important;
    }
    
</style>