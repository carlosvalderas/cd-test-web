
    <fieldset>
                
                <label>Razon social</label> <?php echo CHtml::textField('razon', $empresa->razon ,array('size'=>25, 'readonly'=>true, 'class'=>'razon')); ?><br/>
                
                <label>Rut</label> <?php echo CHtml::textField('rut_empresa', $empresa->id_empresa ,array('size'=>7, 'readonly'=>true)); ?><br/>
                
                <label>Representante Legal</label> <?php echo CHtml::textField('representante', $empresa->nombre_representante ,array('size'=>22, 'readonly'=>true)); ?><br/>
                
                <label>Rut</label> <?php echo CHtml::textField('rut_re', $empresa->rut_representante ,array('size'=>7, 'readonly'=>true)); ?><br/>
                
                <label>Direccion</label> <?php echo CHtml::textField('direccion_e', $empresa->domicilio ,array('readonly'=>true)); ?><br/>
                
                <label>Ciudad</label> <?php echo CHtml::textField('ciudad_e', $ciudad_e->nombre ,array('size'=>5, 'readonly'=>true)); ?>
                
            </fieldset>
 <style type="text/css">
 .razon
 {
 	width:250px;
 }
 </style>