<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$Liquidacion->searchPorUsuario($model->id_usuario),
    'id' => 'liquidacion_grid',
    'enablePagination' => true,
    'columns'=>array(
        //array('name'=>'remuneraion_id_remuneracion','value'=>'$data->remuneracion_id_remuneracion','header'=>'Id_remu'),
        array('name'=>'agno','value'=>'$data->agno','header'=>'Periodo(año)'),
        array('name'=>'mes','value'=>'$data->nombremes()','header'=>'Mes'),
        array('name'=>'sueldo_bruto','value'=>'$data->sueldo('.$model->id_usuario.')','header'=>'Sueldo Bruto'),
        array('name'=>'sueldo_liquido','value'=>'$data->sueldo_liquido','header'=>'Sueldo Liquido'),
        array(
            'class' => 'CButtonColumn',
            'template'=>'{accion_nueva}', // botones a mostrar
            'buttons'=>array(
		'accion_nueva' => array( //botón para la acción nueva
		    'label'=>'Ver Liquidacion', // titulo del enlace del botón nuevo
		    'imageUrl'=>Yii::app()->request->baseUrl.'/images/doc.png', //ruta icono para el botón
                    'url'=>'Yii::app()->createUrl("liquidacion/exportar&id_liquidacion=$data->id" )',
		    ),
		),
          ),
    ),
    )             
 );
?>
