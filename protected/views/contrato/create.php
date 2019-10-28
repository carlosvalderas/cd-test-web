<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/*
$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	'Create',
);
*/
$this->menu=array(
	array('label'=>'Volver al perfil', 'url'=>array('usuario/view&id='.$user->id_usuario.'')),
);

?>

<h1>Crear Contrato de trabajo</h1>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
    <?php CHtml::errorSummary($model); ?>

        <div class="row">
            <?php 
                date_default_timezone_set('America/Santiago');
                $dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");


                echo '<br><p style="font-size:130%;">Osorno,  '. $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y').".</p>"; 

 
                //echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ; 
            ?> 
        </div>
    

    
    <?php
    if($user->cargo_id_cargo != NULL){
        $erri = 'form5';
        $name1 = 'Datos Empleado';
        $name2 = 'Datos del Contrato';
    }
    else {
        $erri = 'erroz';
        $name1 = 'Datos del Estudiante';
        $name2 = 'Datos del convenio';
        
    }
    $this->widget('zii.widgets.jui.CJuiAccordion',array(
        'panels'=>array(
            'Datos empresa'=>$this->renderPartial('form1', array(
                'model'=>$model,
                'form'=>$form,
                'empresa'=>$empresa,
                'ciudad_e'=>$ciudad_e), true),
            $name1 =>$this->renderPartial('form2', array(
                'model'=>$model,
                'form'=>$form,
                'user'=>$user,
                'ciudad'=>$ciudad,
                'cargo'=>$cargo,
                'seccion'=>$seccion),true),
            $name2 =>$this->renderPartial('form3', array(
                'model'=>$model,
                'form'=>$form,
                'jornada'=>$jornada,
                'user'=>$user,
                'jornadaSearch'=>$jornadaSearch
                ), true),
            'Beneficios'=>$this->renderPartial('form4', array(
                'model'=>$model, 
                'form'=>$form,
                'beneficio'=>$beneficio, 
                'user_beneficio'=>$user_beneficio,
                'user_beneficio1'=>$user_beneficio1,
                'user_beneficio2'=>$user_beneficio2,
                'user'=>$user), true),
            'Remuneracion'=>$this->renderPartial($erri, array(
                'model'=>$model,
                'form'=>$form,
                'user'=>$user, 
                'remuneracion'=>$remuneracion, 
                'isapre'=>$isapre, 
                'afp'=>$afp,
                'erri'=>$erri
                ), true),
        ),
        'options'=>array(
            'animated'=>'bounceslide',
            'heightStyle'=>'content',
        ),
    ));
?> 
    <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array('class'=>'btn')); ?>
                
	</div>
    <?php $this->endWidget(); ?>
    </div>

<style>
.inputlikelabel
{
    border: none !important;
    background: transparent !important;
    width:35px !important;
}
#yw0 h1,h2,h3,h4
{
   line-height: 22px 
}
</style>