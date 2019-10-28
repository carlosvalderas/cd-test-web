<?php
/* @var $this AsistenciaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asistencias',
);
?>

<h1>Asistencias</h1>

<?php

            $d = date('d');
            $m = date('m');
            $y = date('Y');
            $mode;
            //echo ($d.$m.$y);
            if($d<28)
            {
                $m--;
                if($m == 1)
                {
                    $m=12;
                    $y--;
                }
            }
            $iduser = $model->id_usuario;
            $remu = Remuneracion::model()->findByAttributes(array('usuario_id_usuario'=>$iduser));
            $mode = Liquidacion::model()->findbyAttributes(array('mes'=>$m,'agno'=>$y,'remuneracion_id_remuneracion'=>$remu->id_remuneracion));
            echo $y--;
            var_dump($mode);

?>
 
