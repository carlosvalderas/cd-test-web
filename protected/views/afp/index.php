<?php
/* @var $this AfpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Afps',
);

$this->menu=array(
	array('label'=>'Create Afp', 'url'=>array('create')),
	array('label'=>'Manage Afp', 'url'=>array('admin')),
);
?>

<h1>Afps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>




















