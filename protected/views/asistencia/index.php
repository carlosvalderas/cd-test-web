<?php
/* @var $this AsistenciaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asistencias',
);
?>
<?php
$this->menu=array(
    array('label'=>'Asistencia', 'url'=>array('index')),
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asiste-form',
	'enableAjaxValidation'=>false,
        //'action'=>Yii::app()->createUrl('asistencia/serchi'),
));


$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'publishDate',
    'language' => 'es',
    'value'=>$publishDate,
    'options'=>array(
        'showAnim'=>'fold',
        'maxDate'=> 'date("Y-m-d")',
        'dateFormat'=>'yy-mm-dd',
        'selectOtherMonths'=>true,
        'showAnim'=>'slide',
        'showButtonPanel'=>true, 
        'showOtherMonths'=>true, 
        'changeMonth' => 'true', 
        'changeYear' => 'true',
    ),
    'htmlOptions'=>array(
        'style'=>'height:20px;',
        'placeholder'=>'Buscar por Fecha',
        'readonly'=>"readonly",
        'data-toggle'=>'tooltip',
        'title'=>'Click para desplegar calendario',
    ),
));
?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Buscar')); ?>
<br/>

<div>
    <fieldset class="field-search">
    <legend>Filtrar por Sección</legend>
    <?php
        $ss = Seccion::model()->findAll();
        echo '<p align="center"><b style="font-size:14px;">';
        foreach($ss as $value)
        {
            echo $value->nombre_sec;
            echo CHtml::radioButton('seccion',false, array('value' => $value->idseccion, 'class'=> 'checkson', 'id'=>'check'.$value->idseccion));
        }
        echo 'Todas'.CHtml::radioButton('seccion',true, array('value' => 4, 'class'=> 'checkson', 'id'=>'check4')).'</p>';
        echo CHtml::hiddenField('hidden_sec' , $seccion , array('id' => 'hidden_sec'));
      ?>

    </fieldset>
    <script type="text/javascript">
        $( document ).ready(function() {
            var id = $('#hidden_sec').val();
            $('#check' + id).prop('checked',true);
        });
    </script>


    <style type="text/css">
        .checkson{
            margin-left: 2%;
            margin-right: 5%;
            zoom: 0.8;
        }
        .field-search
        {
            border: 1px solid #DDD;
            padding: 10px;
            margin: 15px 0 6px 0;
        }
    </style>
</div>

<?php $this->endWidget(); ?>
<br/>

<?php
    if($publishDate != date('Y-m-d'))
    {
        echo '<h1>Asistencia de '.date('d-m-Y',strtotime($publishDate)).'</h1>';
    }
    else
    {
        echo '<h1>Asistencia de HOY</h1>';
    }
    if($seccion == 4)
        echo '<p>Mostrando todas las secciones</p>';
    else if($seccion == 1)
        echo '<p>Filtrando por seccion: Administración</p>';
    else if($seccion == 2)
        echo '<p>Filtrando por seccion: Bodega</p>';
    else if($seccion == 3)
        echo '<p>Filtrando por seccion: Ventas</p>';
    
?> 
        


<?php 
    //var_dump($seccion);
    $this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider'=>$AsistenciaSearch->searchByDate($publishDate, $seccion),
    'id' => 'asistencia_grid',
    'type'=>'condensed',
    'emptyText' => 'Ops, no hay asistencias de ese día o sección',
    'summaryText' =>'Mostrando {start} - {end} de {count} resultados',
    'enablePagination' => true,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'usuario','value'=>'$data->nombre_completo()','header'=>'Usuario'),
        array('name'=>'fecha','value'=>'$data->fecha','header'=>'Fecha'),
        array('name'=>'hora','value'=>'$data->hora','header'=>'Hora'),
        array('name'=>'estado','value'=>'$data->estado1()','header'=>'Estado'),
        array(
            'class' => 'CButtonColumn',
            'template'=>'{accion_nueva}', // botones a mostrar
            'buttons'=>array(
		'accion_nueva' => array( //botón para la acción nueva
		    'label'=>'Ver Usuario', // titulo del enlace del botón nuevo
		    'imageUrl'=>Yii::app()->request->baseUrl.'/images/profile.png', //ruta icono para el botón
                    'url'=>'Yii::app()->createUrl("usuario/view&id=$data->usuario_id_usuario" )',
		    ),
		),
          ),
    ),
    )             
 );


//Yii::app()->getSession()->get('popupvisible') ===>>>>>   VALUE VISIBLE POP-UP
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
'id'=>'dialog-crud',
'options'=>array(
'title'=>'Notificaciones',
'autoOpen'=>Yii::app()->getSession()->get('popupvisible'),
'modal'=>true,
'width'=>500,
'height'=>400,
'resizable'=>false
),
));
$datestring1 = date('d-m-Y');
$date1=date_create($datestring1);
date_modify($date1,"1 day");
$date11 = date_format($date1,"d-m-Y");

$datestring2 = date('d-m-Y');
$date2=date_create($datestring2);
date_modify($date2,"2 day");
$date22 = date_format($date2,"d-m-Y");

$diahoy = date('d-m-Y');
$uno = UsuarioExcepcion::model()->findAllByAttributes(
                    array(),
                    $condition  = 'f_fin = :value1 OR f_fin = :value2 OR f_fin = :value3',
                    $params     = array(
                            ':value1' => $date11, 
                            ':value2' => $date22,
                            ':value3'=> $diahoy,
                )
            );
if($uno != '' || $uno != NULL)
{   
    echo '<h3 align=center>Reintegrándose</h3>';
    echo '<hr>';
    foreach($uno as $value)
    {
        $diade = '';
        if($value['f_fin'] == $date11){ $diade = 'Mañana';}
        else if($value['f_fin'] == $date22){ $diade = 'Pasado Mañana';}
        else if($value['f_fin'] == $diahoy){ $diade = 'Hoy';}
        $user = Usuario::model()->findByPk($value['usuario_id_usuario']);
        echo 'El empleado '.$user->Nombres.' '.$user->apellido_p.' vuelve '.$diade.'.';
        echo '<br><br>';
        echo '<hr>';
    }

}

$this->endWidget();


Yii::app()->getSession()->add('popupvisible', false);
?>


