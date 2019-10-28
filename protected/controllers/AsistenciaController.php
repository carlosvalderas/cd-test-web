<?php


class AsistenciaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('serchi'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */

	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Asistencia;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Asistencia']))
		{
			$model->attributes=$_POST['Asistencia'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idAsistencia));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Asistencia']))
		{
			$model->attributes=$_POST['Asistencia'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idAsistencia));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

		date_default_timezone_set('America/Santiago');
        $AsistenciaSearch = new Asistencia('search');
		$dataProvider=new CActiveDataProvider('Asistencia');       
        $publish = date('Y-m-d');

       	if(!isset($_GET['ajax'])){
			Yii::app()->session['publishDate'] = "";
			Yii::app()->session['seccion'] = 4;       		
       	}
       	$sexy=4;
        if(Yii::app()->session['publishDate']!= ""){
        	$_POST['publishDate'] = Yii::app()->session['publishDate'];
        	$_POST['seccion'] = Yii::app()->session['seccion'];
        }
        if(isset($_POST['publishDate']))
        {
        	Yii::app()->session['publishDate'] = $_POST['publishDate'];
        	Yii::app()->session['seccion'] = $_POST['seccion'];
     		if($_POST['publishDate'] != "") 
    		{
    			$sexy = $_POST['seccion'];
    			$publish = $_POST['publishDate'];
    		}
        }

		$this->render('index',array(
			
			'dataProvider'=>$dataProvider,
                        'AsistenciaSearch'=>$AsistenciaSearch,
                        //'model'=>$model,
                        'publishDate'=>$publish,
                        'seccion'=>Yii::app()->session['seccion'],
		));
    }
	

	
    public function actionSerchi()
    {
        
        $model = Asistencia::model()->findAll();
        $this->render('serchi', array(
                'model'=>$model,
        ));
    }
        

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Asistencia('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Asistencia']))
			$model->attributes=$_GET['Asistencia'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Asistencia the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Asistencia::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Asistencia $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='asistencia-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
