<?php

class UsuarioExcepcionController extends Controller
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
				'actions'=>array(''),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update'),
				'users'=>array('administrador'),
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
            /*
            $auth = Yii::app()->authManager;
            $auth->createRole('administrador');
            $auth->createRole('jefe');
            
            $auth->assign('administrador',1);
            $auth->revoke('jefe',1);
            */
            
            
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
		$model=new UsuarioExcepcion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UsuarioExcepcion']))
		{
			$model->attributes=$_POST['UsuarioExcepcion'];
                        $id=$_POST['UsuarioExcepcion']['usuario_id_usuario'];
                        $exe=$_POST['UsuarioExcepcion']['excepcion_id_excepcion'];
                        
			if($model->save()){
                                $user=Usuario::model()->findByPk($id);
                            if($exe == 1){
                                $user->estado_id_estado = 4;
                                $user->save();}
                            if($exe == 2){
                                $user->estado_id_estado = 6;
                                $user->save();}
                            if($exe == 3){
                                $user->estado_id_estado = 7;
                                $user->save();}
                            if($exe == 4){
                                $user->estado_id_estado = 4;
                                $user->save();
                            }
                            if($exe == 5){
                                $user->estado_id_estado = 3;
                                $user->save();
                            }
				$this->redirect(array('usuario/view','id'=>$id));
                        }
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

		if(isset($_POST['UsuarioExcepcion']))
		{
			$model->attributes=$_POST['UsuarioExcepcion'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_usuario_excepcion));
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
		$dataProvider=new CActiveDataProvider('UsuarioExcepcion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UsuarioExcepcion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UsuarioExcepcion']))
			$model->attributes=$_GET['UsuarioExcepcion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UsuarioExcepcion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UsuarioExcepcion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UsuarioExcepcion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuario-excepcion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
