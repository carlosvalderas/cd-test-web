<?php

date_default_timezone_set('America/Santiago');
$link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('gestion_laboral') or die('No se pudo seleccionar la base de datos');
 
 
/*
 *
 ACÁ SE TIENEN QUE USAR QUERIES NORMALES DE MYSQL PUES NO ESTÁ FUNCIONANDO EL YII EN ESTE CONTEXTO
 
$query = "insert into dummy (id) values('');";
mysql_query($query) or die('Consulta fallida: ' . mysql_error());
 
 *
 */
$fecha = date('d-m-Y');
 
//$query="update usuario set estado_id_estado=1";
$query = "select usuario.id_usuario from usuario inner join usuario_excepcion on usuario.id_usuario = usuario_excepcion.usuario_id_usuario where usuario_excepcion.f_fin = '$fecha'";
$resultado= mysql_query($query) or die('Consulta fallida: ' . mysql_error());
 
while (($fila = mysql_fetch_array($resultado))!=NULL)
{
    $querys="update usuario set estado_id_estado = 1 where id_usuario='$fila[id_usuario]'";
    mysql_query($querys) or die('Consulta fallida: ' . mysql_error());
}
 
 
 
$data2 =file_get_contents("http://www.safp.cl/safpstats/stats/apps/cotobl/cotobl.php");
                if ( preg_match('|<TR  ><TD  class="ITEM" >CAPITAL</TD><TD  align="CENTER" >(.*?)</TD</TR>|is',$data2,$cap2))
                {
                     $capital = str_replace(",",".",$cap2[1]);
                }
                if ( preg_match('|<TR  ><TD  class="ITEM" >CUPRUM</TD><TD  align="CENTER" >(.*?)</TD</TR>|is',$data2,$cap3))
                {
                     $cuprum = str_replace(",",".",$cap3[1]);
                }
                if ( preg_match('|<TR  ><TD  class="ITEM" >HABITAT</TD><TD  align="CENTER" >(.*?)</TD</TR>|is',$data2,$cap4))
                {
                     $habitat = str_replace(",",".",$cap4[1]);
                }
                if ( preg_match('|<TR  ><TD  class="ITEM" >MODELO</TD><TD  align="CENTER" >(.*?)</TD</TR>|is',$data2,$cap5))
                {
                     $modelo = str_replace(",",".",$cap5[1]);
                }
                if ( preg_match('|<TR  ><TD  class="ITEM" >PLANVITAL</TD><TD  align="CENTER" >(.*?)</TD</TR>|is',$data2,$cap6))
                {
                     $planvital = str_replace(",",".",$cap6[1]);
                }
                if ( preg_match('|<TR  ><TD  class="ITEM" >PROVIDA</TD><TD  align="CENTER" >(.*?)</TD</TR>|is',$data2,$cap7))
                {
                     $provida = str_replace(",",".",$cap7[1]);
                }
                 $query1 = "update afp set porcentaje = $capital where nombre = 'Capital'";
                 $query2 = "update afp set porcentaje = $cuprum where nombre = 'Cuprum'";
                 $query3 = "update afp set porcentaje = $habitat where nombre = 'Habitat'";
                 $query4 = "update afp set porcentaje = $modelo where nombre = 'Modelo'";
                 $query5 = "update afp set porcentaje = $planvital where nombre = 'PlanVital'";
                 $query6 = "update afp set porcentaje = $provida where nombre = 'ProVida'";
                 
                 mysql_query($query1) or die('Consulta fallida: ' . mysql_error());
                 mysql_query($query2) or die('Consulta fallida: ' . mysql_error());
                 mysql_query($query3) or die('Consulta fallida: ' . mysql_error());
                 mysql_query($query4) or die('Consulta fallida: ' . mysql_error());
                 mysql_query($query5) or die('Consulta fallida: ' . mysql_error());
                 mysql_query($query6) or die('Consulta fallida: ' . mysql_error());
               
                 
if(date('d') == '19')
{
    $quero="select * from remuneracion";
    $result=mysql_query($quero) or die('Consulta fallida: ' . mysql_error());
    while (($filas = mysql_fetch_array($result))!=NULL)
    {  
        $ide = $filas['usuario_id_usuario'];
        $deteccion="select * from usuario where id_usuario=$ide";
        $rex= mysql_query($deteccion) or die('Consulta fallida: ' . mysql_error());
        while(($charizard = mysql_fetch_array($rex))!=NULL)
        {
            if($charizard['estado_id_estado'] == 1 )
            {
                $mes=date('m');
                $mes--;
                $agno=date('Y');
                $sb=$filas['sueldo_bruto'];
                $blastoise="select afp.porcentaje from afp where id_afp=$filas[afp_id_afp]";
                $ress= mysql_query($blastoise) or die('Consulta fallida: ' . mysql_error());
                while (($fila2 = mysql_fetch_array($ress))!=NULL)
                {
                    $pafp=$fila2['porcentaje'];
                }
                $afp=$sb*($pafp/100);
                $apv=0;
                $p_cesante=$filas['porcent_cesante'];
 
                /*
                $data = file_get_contents("http://si3.bcentral.cl/Indicadoressiete/secure/Indicadoresdiarios.aspx");
                if ( preg_match('|<label id="lblValor1_1">(.*?)</label>|is',$data,$cap))
                {
                    $uf = $cap[1];
                    $uf= str_replace(".", "", $uf);
                    $uf = str_replace(",", ".", $uf);
                }*/
                $apiUrl = 'http://api.sbif.cl/api-sbifv3/recursos_api/uf?apikey=1d6151104c6f2f3b68bb7de3eaa3e6b4bf5e6268&formato=json';
                //Es necesario tener habilitada la directiva allow_url_fopen para usar file_get_contents
                if ( ini_get('allow_url_fopen') ) {
                    $json = file_get_contents($apiUrl);
                } else {
                //De otra forma utilizamos cURL
                $curl = curl_init($apiUrl);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $json = curl_exec($curl);
                curl_close($curl);
                }
                $dailyIndicators = json_decode($json,true);
                //echo 'El valor actual de la UF es $' . $dailyIndicators->uf->valor;
                $uf= $dailyIndicators['UFs'][0]['Valor'];

                $uf = str_replace(".", "", $uf);
                $uf = str_replace(",", ".", $uf);

                
 
                // despues de tener la uf, vamos aqui a calcular
                $isapre=$uf*$filas['porcent_isapre'];
 
                $fonasa=$sb*($filas['porcent_fonasa']/100);
                $id_remu=$filas['id_remuneracion'];
 
               
                // aqui empieza calculo impuesto renta
                $descuento_imp_renta = 0;
                $sueldo_bruto = $sb;

                for($i=1; $i<=8; $i++)
                            {
                                $vale='valor_imp'.$i;
                                $is = 'factor'.$i;
                                $iss = 'rebaja'.$i;
                                $$vale=0;
                                $$is=0;
                                $$iss=0;
                                //var_dump($valor_imp1);
                                //die;
                            }

                $data2 =file_get_contents("http://www.transtecnia.cl/datos_utiles.htm");
                if ( preg_match('|<tr>
            <td><strong>MENSUAL</strong></td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
          </tr>
          <tr>
            <td><strong></strong></td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
          </tr>
          <tr>
            <td><strong></strong></td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
          </tr>
          <tr>
            <td><strong></strong></td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
          </tr>
          <tr>
            <td><strong></strong></td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
          </tr>
          <tr>
            <td><strong></strong></td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
          </tr>
          <tr>
            <td><strong></strong></td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
          </tr>
          <tr>
            <td><strong></strong></td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
            <td>(.*?)</td>
          </tr>
          <tr>|is',$data2,$cap2))
                         {
                         
                         $cap2[2] = str_replace("$", "", $cap2[2]);
                         $cap2[2] = str_replace(".", "", $cap2[2]);
                         $cap2[2] = str_replace(",", ".", $cap2[2]);
                         $valor_imp1 = $cap2[2];
         
                         $cap2[8] = str_replace(",", ".", $cap2[8]);
                         $factor1 = $cap2[8];
         
                         $cap2[9] = str_replace("$", "", $cap2[9]);
                         $cap2[9] = str_replace(".", "", $cap2[9]);
                         $cap2[9] = str_replace(",", ".", $cap2[9]);
                         $rebaja1 = $cap2[9];
         
                         $cap2[7] = str_replace("$", "", $cap2[7]);
                         $cap2[7] = str_replace(".", "", $cap2[7]);
                         $cap2[7] = str_replace(",", ".", $cap2[7]);
                         $valor_imp2 = $cap2[7];
         
                         $cap2[13] = str_replace(",", ".", $cap2[13]);
                         $factor2 = $cap2[13];
         
                         $cap2[14] = str_replace("$", "", $cap2[14]);
                         $cap2[14] = str_replace(".", "", $cap2[14]);
                         $cap2[14] = str_replace(",", ".", $cap2[14]);
                         $rebaja2 = $cap2[14];
         
                         $cap2[12] = str_replace("$", "", $cap2[12]);
                         $cap2[12] = str_replace(".", "", $cap2[12]);
                         $cap2[12] = str_replace(",", ".", $cap2[12]);
                         $valor_imp3 = $cap2[12];
         
                         $cap2[18] = str_replace(",", ".", $cap2[18]);
                         $factor3 = $cap2[18];
         
                         $cap2[19] = str_replace("$", "", $cap2[19]);
                         $cap2[19] = str_replace(".", "", $cap2[19]);
                         $cap2[19] = str_replace(",", ".", $cap2[19]);
                         $rebaja3 = $cap2[19];
         
                         $cap2[17] = str_replace("$", "", $cap2[17]);
                         $cap2[17] = str_replace(".", "", $cap2[17]);
                         $cap2[17] = str_replace(",", ".", $cap2[17]);
                         $valor_imp4 = $cap2[17];
         
                         $cap2[23] = str_replace(",", ".", $cap2[23]);
                         $factor4 = $cap2[23];
         
                         $cap2[24] = str_replace("$", "", $cap2[24]);
                         $cap2[24] = str_replace(".", "", $cap2[24]);
                         $cap2[24] = str_replace(",", ".", $cap2[24]);
                         $rebaja4 = $cap2[24];
         
                         $cap2[22] = str_replace("$", "", $cap2[22]);
                         $cap2[22] = str_replace(".", "", $cap2[22]);
                         $cap2[22] = str_replace(",", ".", $cap2[22]);
                         $valor_imp5 = $cap2[7];
         
                         $cap2[28] = str_replace(",", ".", $cap2[28]);
                         $factor5 = $cap2[28];
         
                         $cap2[29] = str_replace("$", "", $cap2[29]);
                         $cap2[29] = str_replace(".", "", $cap2[29]);
                         $cap2[29] = str_replace(",", ".", $cap2[29]);
                         $rebaja5 = $cap2[29];
         
                         $cap2[27] = str_replace("$", "", $cap2[27]);
                         $cap2[27] = str_replace(".", "", $cap2[27]);
                         $cap2[27] = str_replace(",", ".", $cap2[27]);
                         $valor_imp6 = $cap2[27];
         
                         $cap2[33] = str_replace(",", ".", $cap2[33]);
                         $factor6 = $cap2[33];
                         
                         $cap2[34] = str_replace("$", "", $cap2[34]);
                         $cap2[34] = str_replace(".", "", $cap2[34]);
                         $cap2[34] = str_replace(",", ".", $cap2[34]);
                         $rebaja6 = $cap2[34];
         
                         $cap2[32] = str_replace("$", "", $cap2[32]);
                         $cap2[32] = str_replace(".", "", $cap2[32]);
                         $cap2[32] = str_replace(",", ".", $cap2[32]);
                         $valor_imp7 = $cap2[32];
                 
                         $cap2[38] = str_replace(",", ".", $cap2[38]);
                         $factor7 = $cap2[38];
                         
                         $cap2[39] = str_replace("$", "", $cap2[39]);
                         $cap2[39] = str_replace(".", "", $cap2[39]);
                         $cap2[39] = str_replace(",", ".", $cap2[39]);
                         $rebaja7 = $cap2[39];
                            
                            
                            for($i=1; $i<=7; $i++)
                            {
                                $vale='valor_imp'.$i;
                                $is = 'factor'.$i;
                                $iss = 'rebaja'.$i;
                                //echo '<br>'.$$vale.' '.$$is.' '.$$iss.'<br>';
                                //var_dump($valor_imp1);
                                
                            } 
                                                       
                         }
                         else
                         {
                            var_dump('<h1>ERROR, porfavor contactese con el Administrador del sitio. </h1>');
                         }


                         //Codigo de calculo de impuesto a pagar asignado en la remuneracion
                         if($sueldo_bruto <= $valor_imp1)
                         {
                             $descuento_imp_renta = 0;
                         }
                         if($sueldo_bruto > $valor_imp1)
                         {
                             $calculo = $sueldo_bruto*$factor1;//Sueldo Bruto por el factor decimal de descuento
                             $descuento_imp_renta = $calculo-$rebaja1;//Valor que se descuenta por impuesto y que aparece en la liquidacion
                         }
                         if($sueldo_bruto > $valor_imp2)
                         {
                             $calculo = $sueldo_bruto*$factor2;
                             $descuento_imp_renta = $calculo-$rebaja2;
                         }
                         if($sueldo_bruto > $valor_imp3)
                         {
                             $calculo = $sueldo_bruto*$factor3;
                             $descuento_imp_renta = $calculo-$rebaja3;
                         }
                         if($sueldo_bruto > $valor_imp4)
                         {
                             $calculo = $sueldo_bruto*$factor4;
                             $descuento_imp_renta = $calculo-$rebaja4;
                         }
                         if($sueldo_bruto > $valor_imp5)
                         {
                             $calculo = $sueldo_bruto*$factor5;
                             $descuento_imp_renta = $calculo-$rebaja5;
                         }
                         if($sueldo_bruto > $valor_imp6)
                         {
                             $calculo = $sueldo_bruto*$factor6;
                             $descuento_imp_renta = $calculo-$rebaja6;
                         }
                         if($sueldo_bruto > $valor_imp7)
                         {
                             $calculo = $sueldo_bruto*$factor7;
                             $descuento_imp_renta = $calculo-$rebaja7;
                         }
               
               
                $horas_extra = 0;
                
                $day = 1;
                $month = date('m');
                $year = date('Y');
                if($month == 1)
                {
                    $month = 12;
                    $year--;
                }
                else
                {
                    $month--;
                }          

                $day = str_pad($day, 2,"0",STR_PAD_LEFT);      
                $month = str_pad($month, 2,"0",STR_PAD_LEFT);      
                



                //siempre vamos a tener 4 semanas completas comenzando con lunes   ===//=== no siempre
                //entonces siempre las horas laborales no extras para el mes corresporian a 4*40 = 160
                //ahora solamente hay que calcular las horas extras de los bordes. al inicio, los dias laborales antes del primer lunes del mes
                //y al final, los dias laborales después del último sábado del mes
                //contar la cantidad de dias laborales que hay en esos tramos

                //para el tramo del inicio
                //vemos cuándo cae el primer lunes del mes
                $primer_lunes = primer_lunes($day,$month,$year);
                
                //  ================= JORNAdA =================
                $jorn = "select * from contrato where usuario_id_usuario = $ide";
                $queryjornada = mysql_query($jorn) or die('Consulta fallida: ' . mysql_error());
                while (($contra_us = mysql_fetch_array($queryjornada))!=NULL)
                {
                    $jornada_user = $contra_us['jornada_id_jornada'];
                }
                /*
                 ====================== Jornadas ======================
                ID = 1  Mañana      =   30 Horas semanales =>  Lunes a Sabado.
                ID = 2  Tarde       =   30 Horas semanales =>  Lunes a Sabado.
                ID = 3  Completo    =   40 Horas semanales =>  Lunes a Viernes.
                =======================================================
                */
                $fecha1 = seccionmesinicio($jornada_user,$day,$month,$year);
                $fecha2 = cuadrar_mes($jornada_user,$month,$year);             

                //en la tabla h_pendiente tenemos las horas extras que no se han pagado que se deben pagar este mes.
                //en la tabla h_actual se dejaran las horas extras que entren en este mes
                $horas_1 = "select * from asistencia where fecha >= '$fecha1' and fecha <= '$fecha2' and usuario_id_usuario = $ide";
                $queryhoras1 = mysql_query($horas_1) or die('Consulta fallida: ' . mysql_error());
                $acumula_hora = 0;
                while (($hora1 = mysql_fetch_array($queryhoras1))!=NULL)
                {
                    
                    $hora2 = mysql_fetch_array($queryhoras1);
                    if($hora2 != null){
                        //$hora1 y $hora2 son los 2 registros que tienes que comparar
                        $h1 = $hora1['hora']; 
                        $h2 = $hora2['hora'];

                        $querysumarhora = "select time_to_sec(timediff('$h2', '$h1' )) / 3600;";
                        $r_sumarhora = mysql_query($querysumarhora) or die('Suma de horas fallida: ' . mysql_error());
                        $resto = mysql_fetch_array($r_sumarhora);
                        $acumula_hora = $acumula_hora + $resto[0];
                    }
                    else{

                    }
                }
                $horas_extra = calculo_horas($jornada_user, $acumula_hora, $fecha1, $fecha2, $sb);
                


                $dia_desc=0;
                $sl=$sb-($afp+$apv+$p_cesante+$isapre+$fonasa+$descuento_imp_renta);
                $isapre=(int)$isapre;
                $fonasa=(int)$fonasa;
                $squirtle= "insert into liquidacion values (NULL,$mes,$agno,$id_remu,$dia_desc,$sl,$afp,$apv,$p_cesante,$isapre,$fonasa,$descuento_imp_renta,$horas_extra)";
                mysql_query($squirtle) or die('Consulta fallida: ' . mysql_error());
            }
        }
    }
}
 
 
mysql_close($link);


function primer_lunes($dia,$mes,$agno)
{
    $que_dia_es_primero = date('N', strtotime("$agno-$mes-$dia"));
    $sumar = (7-$que_dia_es_primero%7+1)%7;
    return $dia+$sumar;
}

function cuadrar_mes($seccion,$mes,$agno)
{
    $fechita = date('F', mktime(0, 0, 0, $mes, 10));
    $fechaf = date('Y-m-d', strtotime("last Sunday of $fechita $agno"));
    return $fechaf;
}

function semana_inicio($fecha)
{
$semana=date("W",mktime(0,0,0,$month,$day,$year));
$diaSemana=date("w",mktime(0,0,0,$month,$day,$year));
if($diaSemana==0)
    $diaSemana=7;
$primerDia=date("d-m-Y",mktime(0,0,0,$month,$day-$diaSemana+1,$year));
return $primerDia;
}

function semana_fin($fecha){
$semana=date("W",mktime(0,0,0,$month,$day,$year));
$diaSemana=date("w",mktime(0,0,0,$month,$day,$year));
if($diaSemana==0)
    $diaSemana=7;
$ultimoDia=date("d-m-Y",mktime(0,0,0,$month,$day+(7-$diaSemana),$year));
return $ultimoDia;
}

function eslunes($fecha){
$timestamp = strtotime($fecha);
$x = date('w', $timestamp);
return $x;
}

function getUltimoDiaMes($elAnio,$elMes) {
  return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
}

function resta($inicio, $fin){
    $dif=date("H:i", strtotime("00:00") + strtotime($fin) - strtotime($inicio) );
    return $dif;
}


function seccionmesinicio($seccion,$dia,$mes,$agno)
{
    if($seccion == 1 || $seccion == 2){
        $fechita = date('F', mktime(0, 0, 0, $mes, 10));
        $asd = date('w', strtotime("first day of $fechita $agno"));
        if($asd == 0)
            $fecha_inicio = date('Y-m-d', strtotime("first Monday of $fechita $agno"));
        else{
            if($mes == 1)
            {
                $mes = 12;
                $agno--;
            }
            else
            {
                $mes--;
            }
            $fechita = date('F', mktime(0, 0, 0, $mes, 10));
            $fecha_inicio = date('Y-m-d', strtotime("Last Monday of $fechita $agno")); 
        }

    }
    if($seccion == 3)
    {
        $fechita = date('F', mktime(0, 0, 0, $mes, 10));
        $asd = date('w', strtotime("first day of $fechita $agno"));
        if($asd == 0)
            $fecha_inicio = date('Y-m-d', strtotime("first Monday of $fechita $agno"));
        else{
            if($mes == 1)
            {
                $mes = 12;
                $agno--;
            }
            else
            {
                $mes--;
            }
            $fechita = date('F', mktime(0, 0, 0, $mes, 10));
            $fecha_inicio = date('Y-m-d', strtotime("Last Monday of $fechita $agno")); 
        }
    }
    return $fecha_inicio;
}

function parteHora( $hora )
{    
    $horaSplit = explode(":", $hora);

    if( count($horaSplit) < 3 )
    {
        $horaSplit[2] = 0;
    }
    
    return $horaSplit;
}

function calculo_horas($seccion, $horas, $fecha1, $fecha2, $sb){
    $res1 = dias_trans($fecha1, $fecha2);
    $semana = semanas($res1);

    if($seccion == 1 || $seccion == 2){
        $res2 = $semana * 30;
    }
    else if($seccion == 3){
        $res2 = $semana * 40;
    }
    $res3 = $horas - $res2;
    if($res3 > 0) 
        $res4 = $res3;
    else
        $res4 = 0;

    if($seccion == 1 || $seccion == 2)
        {
            $res5 = $sb * 0.0116667;
            $resultado = $res5 * $res4;
        }
    else if($seccion == 3)
        {
            $res5 = $sb * 0.00875;
            $resultado = $res5 * $res4;
        }

    return $resultado;
}
function dias_trans($fecha_i, $fecha_f){
    $dias   = (strtotime($fecha_i)-strtotime($fecha_f))/86400;
    $dias   = abs($dias); $dias = floor($dias); 
    $dias++;    
    return $dias;
}
function semanas($dias){
    $resultado = $dias / 7;
    return $resultado;
}