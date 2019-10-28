<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Perfil'=>array('index'),
	$model->id_usuario,
);

$this->menu=array(
	array('label'=>'Ver empleados', 'url'=>array('index')),
);
?>

<h1><?php echo $model->Nombres.' '.$model->apellido_p; ?></h1>
<?php
            
            
?>

<?php

  if($model->cargo_id_cargo != NULL)
    $visi = true;
  else
    $visi = false;


$this->widget('CTabView', array(
    'tabs' => array(
  'tab1' => array('title'=>'Datos Personales',
            'view'=>'view1',
            'data'=>(array('remu'=>$remu, 'model'=>$model))
      ),
  'tab2' => array('title'=>'Asistencia',
            'view'=>'view2',
            'data'=>(array('Asistencia'=>$Asistencia, 'model'=>$model))
      ),
  'tab4' => array('title'=>'Excepciones',
          'view'=>'view4',
          'data'=>(array('Excepcion'=>$Excepcion, 'model'=>$model)),
          'visible' => $visi
    ),
  'tab3' => array('title'=>'Liquidaciones',
          'view'=>'view3',
          'data'=>(array('Liquidacion'=>$Liquidacion, 'model'=>$model)),
          'visible' => $visi
    ),
 ),
 'activeTab' => 'tab1' // tab activa
));
?>

