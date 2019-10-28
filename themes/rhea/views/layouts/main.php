<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        
    <script src="<?php echo Yii::app()->baseUrl;?>/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl;?>/js/javas.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php 
		Yii::app()->bootstrap->register(); 
	?>

</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div class="logito-mansito"> <?php echo '<a class="logito-main" href="'.Yii::app()->createUrl('asistencia/index').'"><img class="logo-blanco" src="images/logo-blanco.png"></a>' ?> </div>
		<div id="logo">
		<?php 
		echo CHtml::encode(Yii::app()->name); 
		?>
		</div>
	</div><!-- header -->
	<?php 
		function admicha(){
		if(!Yii::app()->user->isGuest){
		$id = Yii::app()->user->name;
		$model1=  Login::model()->findByPk($id);
			if($model1->cargo == 'Administrador'){
				return true;
			}
		}
		return false;
		}
		//var_dump($model1);
		//die;
	 ?>
	<div id="mainmenu">
		<?php $this->widget('bootstrap.widgets.TbMenu',array(
			'type'=>'pills',
			'stacked'=>false,
			'id' => 'yw2',
			'items'=>array(
				array('label'=>'Asistencia', 'url'=>array('/asistencia/index'),'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Empleados', 'url'=>array('/usuario/create'),'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Beneficios', 'url'=>array('/usuarioBeneficio/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Excepciones', 'url'=>array('/usuarioExcepcion/create'),'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				//array('label'=>'Login', 'url'=>array('/login/logearse'), 'visible'=>Yii::app()->user->isGuest),
				
				array('label'=>'Usuarios del sistema', 'url'=>array('/login/create'), 'visible'=>admicha()),
				array('label'=>'Desconectar ('.Yii::app()->user->name.')', 'url'=>array('/login/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>


	</div><!-- mainmenu -->
	
	<?php  
	?>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink'=>''
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<div id="main-content">
		<?php echo $content; ?>
	</div>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by EL TIGRE.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
