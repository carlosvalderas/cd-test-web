
    <fieldset>
                <label>Rut</label> <?php echo CHtml::textField('rut_usuario', $user->rut."-".$user->dv ,array('readonly'=>true)); ?><br/>
                
                <label>Nombre</label> <?php echo CHtml::textField('nombre', $user->Nombres." ".$user->apellido_p." ".$user->apellido_m ,array('size'=>30, 'readonly'=>true)); ?><br/>
                
                <label>Nacionalidad</label> <?php echo CHtml::textField('nacionalidad', $user->nacionalidad ,array('size'=>13, 'readonly'=>true)); ?><br/>
                
                

                <label class="asd">Fecha Nac.</label> <?php echo CHtml::textField('d_nac', $user->d_nac ,array('size'=>1, 'readonly'=>true, 'class'=>'fechad')); ?>
                
                - <?php echo CHtml::textField('m_nac', $user->m_nac ,array('size'=>1, 'readonly'=>true, 'class'=>'fechad')); ?>
                
                - <?php echo CHtml::textField('a_nac', $user->a_nac ,array('size'=>3, 'readonly'=>true, 'class'=>'fechad')); ?>

                
                
                <label>Direccion</label> <?php echo CHtml::textField('direccion', $user->direccion ,array('readonly'=>true)); ?><br/>
                
                <label>Comuna</label> <?php echo CHtml::textField('ciudad_u', $ciudad->nombre ,array('readonly'=>true)); ?><br/>
                
                <?php  
                if($user->cargo_id_cargo != NULL){
                    echo '<label>Cargo</label>';
                    echo CHtml::textField('ciudad_u', $cargo->nombre ,array('readonly'=>true)); 
                }
                ?><br/>
                
                <?php 
                if($user->cargo_id_cargo != NULL){
                    echo '<label>Seccion</label>';
                    echo CHtml::textField('seccion', $seccion->nombre_sec ,array('readonly'=>true)); 
                }
                ?>
                
    </fieldset>
 <style type="text/css">
 .fechad
 {
    width:48px;
 }
 </style>   