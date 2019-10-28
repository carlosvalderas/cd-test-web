<?php
/* @var $this ContratoController */
/* @var $model Contrato */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	$model->id_contrato,
);


$this->menu=array(
	array('label'=>'List Contrato', 'url'=>array('index')),
	array('label'=>'Create Contrato', 'url'=>array('create')),
	array('label'=>'Update Contrato', 'url'=>array('update', 'id'=>$model->id_contrato)),
	array('label'=>'Delete Contrato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_contrato),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contrato', 'url'=>array('admin')),
);
?>

<h1>Contrato de 
<?php 
$megaman=  Usuario::model()->findByPk($model->usuario_id_usuario);
echo $megaman->Nombres.' '.$megaman->apellido_p;
?>
</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_contrato',
		'dia',
		'mes',
		'anio',
                'servicios',
		'condiciones',
		'dias_abandono',
		'ejemplares',
		'jornada_id_jornada',
		'usuario_id_usuario',
		'dia_termino',
		'mes_termino',
		'anio_termino',
	),
)); ?>

                <br/>
                
                
                <?php $this->widget('zii.widgets.CMenu',array(
                'id'=>'pdfima',
                'encodeLabel'=>false,
                'items'=>array(
                    array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/pdf_icon.jpg" />',
                          'url'=>array('/contrato/exportar&id_contrato='.$model->id_contrato.''))
                
                ),
                )); ?>                
                <style>
                    #pdfima
                    {
                        list-style:none outside none
                    }
                </style>                       
