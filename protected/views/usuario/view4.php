<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$Excepcion->searchPorUsuario($model->id_usuario),
    'id' => 'excepcion_grid',
    'enablePagination' => true,
    'columns'=>array(
        array('name'=>'excepcion','value'=>'$data->exp()','header'=>'Excepcion'),
        array('name'=>'f_inicio','value'=>'$data->f_inicio','header'=>'Fecha inicio'),
        array('name'=>'f_fin','value'=>'$data->f_fin','header'=>'Fecha termino'),
    ),
    )             
 );?>