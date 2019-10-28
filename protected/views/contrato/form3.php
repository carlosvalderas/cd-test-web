<fieldset>
                <?php 
                if($user->cargo_id_cargo != NULL){
                    echo '<label>Servicio</label>';
                    echo $form->textArea($model,'servicios',array('size'=>45)); 
                }
                ?><br/>
                
                <label>Condiciones</label> <?php echo $form->textArea($model,'condiciones',array('size'=>45)); ?><br/>
                
                <label>Jornada</label> <?php echo $form->dropDownList
              ($model,'jornada_id_jornada', 
              CHtml::listData(Jornada::model()->findAll(), 'id_jornada', 'nombre'), 
              array('empty'=>'Seleccione Jornada')); ?><br/>
                
                <?php 
                $this->widget('zii.widgets.grid.CGridView', array(
                'dataProvider'=>$jornadaSearch->search(),
                'id' => 'jornadas_grid',
                'summaryText' => '',
                'enablePagination' => false,
                'columns'=>array(
                    array('name'=>'nombre','value'=>'$data->nombre','header'=>'Jornada'),
                    array('name'=>'h_entrada1','value'=>'$data->h_entrada1','header'=>'Entrada'),
                    array('name'=>'h_salida1','value'=>'$data->h_salida1','header'=>'Salida colacion'),
                    array('name'=>'h_entrada2','value'=>'$data->h_entrada2','header'=>'Entrada 2°'),
                    array('name'=>'h_salida2','value'=>'$data->h_salida2','header'=>'Salida'),
                    array('name'=>'d_inicio','value'=>'$data->dia_inicio','header'=>'Inicio'),
                    array('name'=>'d_termino','value'=>'$data->dia_termino','header'=>'Término'),
                ),
                  
 ));?>
              
                <?php 
                if($user->cargo_id_cargo != NULL){
                    echo '<label>Dias abandono</label>';
                    echo $form->textField($model,'dias_abandono',array('size'=>1, 'value'=>2)); 
                    echo '<br/>';
                    echo '<p style="display:inline-block;margin-bottom:-1px;"><label style:"width:25%;margin-right:1px;align-text:right">Fecha termino</label>';
                    //echo $form->textField($model,'dia_termino',array('size'=>1,'maxlength'=>2,'class'=>'numberinput', 'placeholder'=>'Dia')).' ';
                    //echo $form->textField($model,'mes_termino',array('size'=>1,'maxlength'=>2,'class'=>'numberinput','placeholder'=>'Mes')).' ';
                    //echo $form->textField($model,'anio_termino',array('size'=>3,'maxlength'=>4,'class'=>'numberinput','placeholder'=>'Año'));
                    echo '</p>';
                }
                ?>
               <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                   'name'=>'fechatermino',
                    'language' => 'es',
                    'htmlOptions' => array('readonly'=>"readonly", 'id'=>'ffin'),
                    'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>'',
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
    ),
  )); 
 ?>
                
                <!-- <label>ejemplares</label> --> <?php /* echo $form->textField($model,'ejemplares',array('size'=>1, 'value'=>2)); */?>
                
                
                
            </fieldset>

