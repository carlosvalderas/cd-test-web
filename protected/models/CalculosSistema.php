<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CalculosSistema
 *
 * @author Kitan
 */
class CalculosSistema {
    //put your code here
    
    public function calcularRemuneracion($usuario_id){
        $usuario = Usuario::model()->findByPk($usuario_id);
        $remuneracion = $usuario->remuneracions;
        $porcentaje_afp = $remuneracion->porcent_afp;
        $porcentaje_apv = $remuneracion->porcent_apv;
        $porcentaje_isapre = $remuneracion->porcent_isapre;
        $porcentaje_fonasa = $remuneracion->porcent_fonasa;
        $sueldo_bruto = $remuneracion->sueldo_bruto;
             
        $liquidacion = new Liquidacion();
        $liquidacion->descuento_afp = $sueldo_bruto * ($porcentaje_afp)/100;
        $liquidacion->descuento_apv = $sueldo_bruto * ($porcentaje_apv)/100;
        $liquidacion->descuento_isapre = $sueldo_bruto *($porcentaje_isapre)/100;
        $liquidacion->descuento_fonasa = $sueldo_bruto * ($porcentaje_fonasa)/100;
        $liquidacion->sueldo_liquido = $sueldo_bruto - $liquidacion->descuento_afp - $liquidacion->descuento_apv - $liquidacion->descuento_isapre - $liquidacion->descuento_fonasa;
        
        $liquidacion->save();
       
        
        
        
        
    }
}
