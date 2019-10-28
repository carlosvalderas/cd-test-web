

<style>
.compactRadioGroup {
padding-left: 1em;
}

.compactRadioGroup LABEL,
.compactRadioGroup INPUT {
display: inline;
} 

</style> 

<fieldset >
    <label>Sueldo bruto</label> <?php echo $form->textField($remuneracion,'sueldo_bruto',array('size'=>6,'maxlength'=>8, 'class'=>'numberinput')); ?>
    
    <fieldset><legend>Afp</legend>
        <p style:"margin-bottom:-1px"><?php echo $form->dropDownList
              ($remuneracion,'afp_id_afp', 
              CHtml::listData(Afp::model()->findAll(), 'id_afp', 'nombre'), 
              array('empty'=>'Seleccione AFP', 'class'=>'selectremu')); ?></p>
        
    </fieldset>
    <fieldset><legend>Salud</legend>
        <div class="row">
            <p  style="margin-bottom:-1px;margin-left:30%">
            Fonasa: <input class="tipo" id="fonasa" type="radio" name="tipo" value="Fonasa"/>
            Isapre: <input class="tipo" id="isapre" type="radio" name="tipo" value="Isapre"/>  
            </p>
        </div>
            <div id="isapres">
              <p style="margin-bottom:-1px">
              <?php echo $form->dropDownList
              ($remuneracion,'isapre_id_isapre', 
              CHtml::listData(Isapre::model()->findAll(), 'id_isapre', 'nombre'), 
              array('empty'=>'Seleccione Isapre', 'onChange'=>'funisa()' , 'class'=>'selectremu'),
              array('id' => 'isa_pre')); ?></p>
            </div>
        <div id="isa_valor">
            <p style="margin-bottom:-1px;margin-left:39%">
            <?php echo $form->textField($remuneracion,'porcent_isapre',array('size'=>6,'maxlength'=>8, 'placeholder'=>'Valor', 'class'=>'isavalor')); ?>
            </p>
            <p class="hint">
			Ingrese valor de su plan en UF (decimal con punto)
                        Ejemplo 1.2
		</p>
        </div>
            
            
    </fieldset>
                
                
</fieldset>


<script>
function funisa(){
    $('#isa_valor').show();
}
</script>
<script>
  $(document).ready(function(e){


    $('#isa_valor').hide();
    $('#isapres').hide();
    $('.tipo').click(function(ev){
        if($("#fonasa").is(":checked")){
            $('#isapres').hide();
            $('#isa_valor').hide();
        }
        else if($("#isapre").is(":checked")){
            $('#isapres').show();
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
    $('input.numberinput').bind('keypress', function (e) 
    {
        return !(e.which != 8 && e.which != 0 &&
                (e.which < 48 || e.which > 57));

    });
});
</script>

<style type="text/css">
.selectremu
{
  margin-left: 127px !important;
}
.isavalor
{
  margin-left: -60px !important;
}
</style>
    
