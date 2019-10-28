<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$Asistencia->searchPorUsuario($model->id_usuario),
    'id' => 'asistencia_grid',
    'enablePagination' => true,
    'columns'=>array(
        array('name'=>'fecha','value'=>'$data->fecha','header'=>'Fecha'),
        array('name'=>'hora','value'=>'$data->hora','header'=>'Hora'),
        array('name'=>'estado','value'=>'$data->estado1()','header'=>'Estado'),
        
    ),
    )             
 );?>