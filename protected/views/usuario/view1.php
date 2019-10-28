<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nombres',
		array('name'=>'Apellido Paterno','value'=>$model->apellido_p),
		array('name'=>'Apellido Materno','value'=>$model->apellido_m),
		array('name'=>'Rut','value'=>$model->rut.'-'.$model->dv),
		'telefono',
		'direccion',
		'mail',
                array('name'=>'Cargo','value'=>$model->cargo()),
                array('name'=>'Estado','value'=>$model->estadio()),
                array('name'=>'Fecha Nacimiento','value'=>$model->d_nac.' de '.$model->nombremes().' de '.$model->a_nac),
		'nacionalidad',
		'estado_civil',
	),
)); ?>
<?php echo CHtml::hiddenField('name' , $model->estado_id_estado, array('id' => 'hiddenInput')); ?>


<?php
Yii::app()->getSession()->add('ide', $model->id_usuario);
                $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'contrato-form',
                    'enableAjaxValidation'=>false,
                        'action'=>Yii::app()->createUrl('contrato/create'),

 ));
    if(!Yii::app()->user->IsGuest)
        { 
            $rol = Login::model()->findByPk(Yii::app()->user->name);
            if($rol->cargo == 'Administrador')
            {
                $exi;
                $exi = Contrato::model()->findByAttributes(array('usuario_id_usuario'=>$model->id_usuario));
                if(is_null($exi))
                {
                    if($model->cargo_id_cargo != NULL)
                        echo CHtml::submitButton($model->isNewRecord ? 'Update' : 'Crear contrato',array('class'=>'btn'));
                    else
                        echo CHtml::submitButton($model->isNewRecord ? 'Update' : 'Crear Convenio',array('class'=>'btn'));
                }
                else{
                    if($model->cargo_id_cargo != NULL)
                    {
                        echo CHtml::link('Ver Contrato', array('contrato/exportar&id_contrato='.$exi->id_contrato),array('target'=>'_blank','class'=>'btn default'));
                        
                        echo CHtml::Button('Desvincular', array('id'=> 'desvincular','class'=>'btn','submit' => array('usuario/desvincular&id='.$model->id_usuario), 'confirm'=>'¿ Estas seguro de desvincular al Empleado ?'));
                        echo CHtml::Button('Reintegrar', array('id'=> 'reintegrar','class'=>'btn', 'submit' => array('usuario/desvincular&id='.$model->id_usuario), 'confirm'=>'¿ Desea reintegrar al Empleado a la empresa ?'));
                    }
                        else{
                        echo CHtml::Button('Ver Convenio', array('contrato/exportar&id_contrato='.$exi->id_contrato),array('target'=>'_blank','class'=>'btn default'));
                            $d = date('d');
                            $m = date('m');
                            $y = date('Y');
                            if($d<28)
                            {
                                $m--;
                                
                                if($m == 1)
                                {
                                $m=12;
                                $y--;
                                }
                            }
                            $mod;
                            $opsss;
                            $mod = Liquidacion::model()->findByAttributes(array('mes'=>$m, 'agno'=>$y, 'remuneracion_id_remuneracion'=>$remu->id_remuneracion));
                            if(!is_null($mod))
                            {
                                $opsss = $mod->id;
                                echo CHtml::link('Ver Liquidacion', array('liquidacion/exportar&id_liquidacion='.$opsss),array('class'=>'btn','target'=>'_blank'));
                            }
                    }
                                
                }
            }
            else{
                $exi;
                $exi = Contrato::model()->findByAttributes(array('usuario_id_usuario'=>$model->id_usuario));
                if(is_null($exi))
                {
                    echo ("<label>Sin contrato</label>");
                }
                else{
                    echo CHtml::link('Ver Contrato', array('contrato/exportar&id_contrato='.$exi->id_contrato),array('target'=>'_blank','class'=>'btn default'));
                            $d = date('d');
                            $m = date('m');
                            $y = date('Y');
                            if($d<28)
                            {
                                $m--;
                                
                                if($m == 1)
                                {
                                $m=12;
                                $y--;
                                }
                            }
                            $mod;
                            $opsss;
                            $mod = Liquidacion::model()->findByAttributes(array('mes'=>$m, 'agno'=>$y, 'remuneracion_id_remuneracion'=>$remu->id_remuneracion));
                            if(!is_null($mod))
                            {
                                $opsss = $mod->id;
                                echo CHtml::link('Ver Liquidacion', array('liquidacion/exportar&id_liquidacion='.$opsss),array('class'=>'btn','target'=>'_blank'));
                            }
                                
                }
            }
        }



$this->endWidget(); 
?>
<script type="text/javascript">
    var xy = $("#hiddenInput").val();
    $("#reintegrar").hide();
    $("#desvincular").hide();
    if(xy == 1)
    {
        $("#desvincular").show();
    }
    if(xy == 2)
        $("#reintegrar").show();
</script>