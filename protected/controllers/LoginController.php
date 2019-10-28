<?php

class LoginController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	/*public function filters()
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
				'actions'=>array('logearse'),
                            //'actions'=>array('index','view','getCargo','getName','getRut','logearse'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete','index','view','getCargo','getName','getRut'),
                            //'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
                            //'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        public function actionGetCargo(){
            $usuario_id = CHtml::encode($_POST['usuario_id']);
            $usuario = Usuario::model()->findByPk($usuario_id);
            if($usuario != null){
                echo $usuario->cargoIdCargo->nombre;
            }
        }
        
        public function actionGetCargoRut(){
            $usuario_id = CHtml::encode($_POST['usuario_id']);
            $usuario = Usuario::model()->findByPk($usuario_id);
            if($usuario != null){
                echo $usuario->cargoIdCargo->nombre.";".$usuario->rut;
            }
        }
        
        public function actionGetName(){
            $usuarios_id = CHtml::encode($_POST['usuario_id']);
            $nombre=  Usuario::model()->listar()->$usuarios_id;
            echo $nombres;
        }
        
        public function actionLogearse()
	{
		if(Yii::app()->user->isGuest){
		date_default_timezone_set('America/Santiago');
        Yii::app()->getSession()->add('popupvisible', true);        
		$model=new LogearseForm();
                /*
		if(isset($_POST['ajax']) && $_POST['ajax']==='logearse-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
                */
		if(isset($_POST['LogearseForm']))
		{
			$model->attributes=$_POST['LogearseForm'];
                        $pass_des = $_POST['LogearseForm']['pass'];
                        $usuario = $_POST['LogearseForm']['id_rut'];
                        
                        
                        
                        /*$salt = openssl_random_pseudo_bytes(22);
                        $salt = '$2a$%13$' . strtr(base64_encode($salt), array('_' => '.', '~' => '/'));
                        $password_hash = crypt($pass_des, $salt);
                        */
                        $password_hash = CPasswordHelper::hashPassword($pass_des);
                        $user = Login::model()->findByPk($usuario);
                        
			// validate user input and redirect to the previous page if valid
			/*if($model->validate() && $model->logearseform())*/
                        if($user != null)
                            if($model->login())
                                $this->redirect(Yii::app()->createUrl('asistencia/index'));
                            else
                            Yii::app()->user->setFlash('Error',"Rut o contraseña incorrectos");
                        else
                            Yii::app()->user->setFlash('Error',"Rut o contraseña incorrectos");
                        
                        
                        
                         
       	}
		
        	$this->render('logearse', array('model'=>$model));
        }
        else
        {
        	$this->redirect(Yii::app()->createUrl('asistencia/index'));
		}
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
        
        public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->createUrl('login/logearse'));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
               
		$model=new Login;
                $usuarios=  Usuario::model()->listar();
                
                //$auth = Yii::app()->authManager;
                //$role = $auth->createRole('Administrador', '');
                //$role = $auth->createRole('Jefe', '');
                
                
                //$password = $form->pass;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
		if(isset($_POST['Login']))
		{
                        if($_POST['Login']['pass'] == $_POST['x_pass'])
                        {

                            $model->attributes=$_POST['Login'];
                            $password = $_POST['Login']['pass'];
                            $rpt_pass = $_POST['x_pass'];
                            
                            $id=$_POST['Login']['usuario_id_usuario'];
                            $user = Usuario::model()->findByPk($id);
                            
                            $model->nombre=$user->Nombres.' '.$user->apellido_p.' '.$user->apellido_m;
                            /*
                            $salt = openssl_random_pseudo_bytes(22);
                            $salt = '$2a$%13$' . strtr(base64_encode($salt), array('_' => '.', '~' => '/'));
                            $password_hash = crypt($password, $salt);*/
                            
                            $password_hash = CPasswordHelper::hashPassword($password);
                            
                            $model->pass=$password_hash;
                            $model->cargo=$_POST['Login']['cargo'];
                            
                            if($user->cargo_id_cargo == 1 || $user->cargo_id_cargo == 2){
                                if($model->save()){
                                    $auth = Yii::app()->authManager;
                                    $auth->assign($model->cargo,$model->id_rut);
                                    $this->redirect(array('view','id'=>$model->id_rut));}
                                }
                           
                           else
                               Yii::app()->user->setFlash('Error',"Solo un Administrador o un Jefe pueden tener un login");
                        }
                        else
                            Yii::app()->user->setFlash('Error',"Las contraseñas no son iguales");
                }
		$this->render('create',array(
			'model'=>$model,
                        'usuarios'=>$usuarios,
		));
	}
        
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		if($id == null){
			$id = Yii::app()->user->name;
		}
        
        
		$model=  Login::model()->findByPk($id);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
		if(isset($_POST['Login']))
		{
                        $old_pass = $_POST['Login']['pass'];
                        $new_pass = $_POST['new_pass'];
                        $rep_pass = $_POST['rep_pass'];
			
                        $password_hash_old = CPasswordHelper::hashPassword($old_pass);
                        if(CPasswordHelper::verifyPassword ($old_pass, $model->pass)){
                                if(!empty($new_pass)){
                                        if(!empty($rep_pass)){
                                        	if($new_pass == $rep_pass){
		                                        $password_hash = CPasswordHelper::hashPassword($new_pass);
		                                        $model->pass = $password_hash;
		                                        if($model->validate()){
			                                        $model->save();
			                                        $this->redirect(array('view','id'=>$model->id_rut));
		                                    	}
		                                    	else
		                                    		Yii::app()->user->setFlash('Error',"Las contraseñas no son iguales.");
	                                        }
	                                        else
	                                            Yii::app()->user->setFlash('Error',"Las contraseñas no son iguales o estan vacias.");
	                                    }
                                }
                                else
                                    Yii::app()->user->setFlash('Error',"Las contraseñas no son iguales o estan vacias.");
                        }
                        else
                            Yii::app()->user->setFlash('Error',"Contraseña incorrecta.");
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
		$Login = new Login('search');
		$dataProvider=new CActiveDataProvider('Login');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Login('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Login']))
			$model->attributes=$_GET['Login'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Login the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Login::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Login $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
