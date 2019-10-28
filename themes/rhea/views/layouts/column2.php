<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="span-5">
		<div id="sidebar">
		<?php
			$id1 = Yii::app()->user->name;
			$this->beginWidget('zii.widgets.CPortlet', array(
                                'title'=>'<a class="changepass" href=http://localhost/gestionlaboral/index.php?r=login/update&id='.$id1.'>Cambiar Contraseña</a>',
                                
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
			
		</div><!-- sidebar -->
	</div>

	<div class="span-16 last">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<?php $this->endContent(); ?>
<style>
	.portlet-title a.changepass
	{
		color:#FFF;
		text-decoration: none;
	}
</style>



<?php
/*
$variable = Yii::app()->getSession()->get('popupvisible');
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
'id'=>'dialog-crud',
'options'=>array(
'title'=>'Notificaciones',
'autoOpen'=>false,
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
    echo '<h3 align=center>Reintegrandose</h3>';
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
*/
?>
