<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>




<h2>Error <?php echo $code; ?></h2>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>

<?php
	switch ($code) {
		case '404':
				echo '<img src="images/error404.gif">';
			break;
			
		case '405':
				echo '<img src="images/error404.gif">';
			break;
		
		case '500':
				echo 'Contactese con el Administrador del sitio<br>';
				echo '<img src="images/error404.gif">';
			break;
	}

?>