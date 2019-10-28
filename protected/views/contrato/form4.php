<div id="0">  
    <fieldset><legend>Beneficio A</legend>
   <label>Beneficio</label><?php echo $form->dropDownList
              ($user_beneficio,'beneficio_id_beneficio', 
              CHtml::listData(Beneficio::model()->findAll(), 'id_beneficio', 'nombre'), 
              array('empty'=>'Seleccione beneficio')); ?> <br/>      
      <label>Monto</label> <?php echo $form->textField($user_beneficio,'monto',array('size'=>6, 'id'=>'0monto')); ?><br/>  
      <label>Fecha Inicio</label>  
      <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$user_beneficio,
   'attribute'=>'f_inicio',
   'value'=>$user_beneficio->f_inicio,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly", 'id'=>'f_inicio0', 'placeholder'=>'Fecha Inicio'),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$user_beneficio->f_inicio,
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
    'onClose' => new CJavaScriptExpression('function (selectedDate) { $("#f_fin0").datepicker("option", "minDate", selectedDate); }'),
    ),
  )); 
 ?>
      <br/> 
      <label>Fecha Término</label> 
          <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$user_beneficio,
   'attribute'=>'f_fin',
   'value'=>$user_beneficio->f_fin,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly", 'id'=>'f_fin0', 'placeholder'=>'Fecha Término'),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$user_beneficio->f_fin,
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
    //'minDate'=>'date("d-m-Y")', 
    'maxDate'=> "+20Y",
    ),
  )); 
 ?>
   </fieldset>     
</div>

<div id="1">  
   <fieldset> <legend>Beneficio B</legend>
   <label>Beneficio</label> <?php echo $form->dropDownList
              ($user_beneficio1,'beneficio_id_beneficio', 
              CHtml::listData(Beneficio::model()->findAll(), 'id_beneficio', 'nombre'), 
              array('empty'=>'Seleccione beneficio')); ?> <br/>      
      <label>Monto</label> <?php echo $form->textField($user_beneficio1,'monto',array('size'=>6, 'id'=>'1monto')); ?><br/>  
      <label>Fecha Inicio</label>  
      <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$user_beneficio1,
   'attribute'=>'f_inicio',
   'value'=>$user_beneficio1->f_inicio,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly", 'id'=>'f_inicio1', 'placeholder'=>'Fecha Inicio'),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$user_beneficio1->f_inicio,
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
    'onClose' => new CJavaScriptExpression('function (selectedDate) { $("#f_fin1").datepicker("option", "minDate", selectedDate); }'),
    ),
  )); 
 ?>
      <br/> 
      <label>Fecha Término</label> 
          <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$user_beneficio1,
   'attribute'=>'f_fin',
   'value'=>$user_beneficio1->f_fin,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly", 'id'=>'f_fin1', 'placeholder'=>'Fecha Término'),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$user_beneficio1->f_fin,
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
    //'minDate'=>'date("d-m-Y")', 
    'maxDate'=> "+20Y",
    ),
  )); 
 ?>
   </fieldset>     
</div>

<div id="2">  
   <fieldset> <legend>Beneficio C</legend>
   <label>Beneficio</label> <?php echo $form->dropDownList
              ($user_beneficio2,'beneficio_id_beneficio', 
              CHtml::listData(Beneficio::model()->findAll(), 'id_beneficio', 'nombre'), 
              array('empty'=>'Seleccione beneficio')); ?> <br/>      
      <label>Monto</label> <?php echo $form->textField($user_beneficio2,'monto',array('size'=>6, 'id'=>'2monto')); ?><br/>  
      <label>Fecha Inicio</label>  
      <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$user_beneficio2,
   'attribute'=>'f_inicio',
   'value'=>$user_beneficio2->f_inicio,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly", 'id'=>'f_inicio2', 'placeholder'=>'Fecha Inicio'),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$user_beneficio2->f_inicio,
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
    'onClose' => new CJavaScriptExpression('function (selectedDate) { $("#f_fin2").datepicker("option", "minDate", selectedDate); }'),
    ),
  )); 
 ?>
      <br/> 
      <label>Fecha Término</label> 
          <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$user_beneficio2,
   'attribute'=>'f_fin',
   'value'=>$user_beneficio2->f_fin,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly", 'id'=>'f_fin2', 'placeholder'=>'Fecha Término'),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$user_beneficio2->f_fin,
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
    //'minDate'=>'date("d-m-Y")', 
    'maxDate'=> "+20Y",
    ),
  )); 
 ?>
   </fieldset>     
</div>
      <br/>
      <?php echo CHtml::Button('bt_mas', array('value'=>'+', 'id'=>'mas')); ?> <?php echo CHtml::Button('bt_menos', array('value'=>'-', 'id'=>'menos')); ?>
                
<script>
$(document).ready(function(e){
    $('#1').hide();
    $('#2').hide();
    var x = 0;
    $('#mas').click(function(ev){
            if(x<2)
            {
                x++;
                $('#'+x).show();
            }
        });
    $('#menos').click(function(ev){
            if(x!==0)
            {
                $('#'+x).hide();
                document.getElementById(x+'monto').value = null;
                x--;
            }
    });
});
</script>

