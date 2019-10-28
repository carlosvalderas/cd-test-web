<?php

class UsuarioController extends \Controller {
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
				'actions'=>array('create','update','index','view','desvincular'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','desvincular','delete'),
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
        public function actionDesvincular($id)
    {
    	$usuario = Usuario::model()->findByPk($id);

    	if($usuario->estado_id_estado == 2)
    	{
    		$usuario->estado_id_estado=1;
    	}else if($usuario->estado_id_estado == 1)
    	{
    		$usuario->estado_id_estado=2;
    	}
    	$usuario->save();
		$this->redirect(array('view','id'=>$id));

    }
	public function actionView($id)
	{
                $Asistencia = new Asistencia('search');
		$dataProvider1=new CActiveDataProvider('Asistencia');
                
                $Liquidacion = new Liquidacion('search');
		$dataProvider2=new CActiveDataProvider('Liquidacion');
                
                $Excepcion = new UsuarioExcepcion('search');
		$dataProvider3=new CActiveDataProvider('Excepcion');
                $remu = Remuneracion::model()->findByAttributes(array('usuario_id_usuario'=>$id));
		$this->render('view',array(
			'model'=>$this->loadModel($id),
                        'remu'=>$remu,
                        'Asistencia'=>$Asistencia,
                        'dataProvider1'=>$dataProvider1,
                        'Liquidacion'=>$Liquidacion,
                        'dataProvider2'=>$dataProvider2,
                        'Excepcion'=>$Excepcion,
                        'dataProvider3'=>$dataProvider3,
		));
	}
        
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Usuario;

                $estudiante = new Estudiante();
                $cargos = Cargo::model()->findAll();
                $instituciones = Institucion::model()->findAll();
                $situaciones = SituacionAcademica::model()->findAll();
                $carreras = Carrera::model()->findall();
                
                
                $contrato = Contrato::model()->findAll();
                $ciudad = Ciudad::model()->findAll();
                $seccions= Seccion::model()->findAll();
                
                //$estudiantes = Estudiante::model()->findAll();
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Usuario']))
		{
                    
                        //$estado_civ=$_POST['estado_civil'];
                        //$model->estado_civil=$estado_civ;
			$model->attributes=$_POST['Usuario'];
                        
                        $model->d_nac=$_POST['d_nac'];
                        $model->m_nac=$_POST['m_nac'];
                        $model->nacionalidad=$_POST['nacionalidad'];
                        $model->estado_civil=$_POST['estado_civil'];
                        $model->estado_id_estado=1;
                        
                        //$tipo = $_POST['tipo'];
                        
                        if($model->validate())
                        {
                            $model->save();
                            $tipo = $_POST['tipo'];
                            if($tipo == 'Empleado')
                                {
                                //crear un nuevo registro en la tabla de empleados
                                $empleado = new Empleado();
                                //seteo los campos de este nuevo registro para guardarlo en la BD
                                $empleado->usuario_id_usuario = $model->id_usuario;
                                $empleado->Empresa_id_empresa = 799874504;
                                
                                //con esta instruccion guardo el registro en la BD
                                
                                if($empleado->validate()){
                                    $empleado->save();
                                    $this->redirect(array('view','id'=>$model->id_usuario));
                                }
                                else
                                print_r($empleado->getErrors());
                            }
                            if($tipo == 'Estudiante')
                            {
                                $nuevo_estudiante = new Estudiante();
                                $nuevo_estudiante->usuario_id_usuario = $model->id_usuario;
                                $nuevo_estudiante->attributes=$_POST['Estudiante'];
                                
                                if($nuevo_estudiante->validate()){
                                    $nuevo_estudiante->save();
                                    $this->redirect(array('view','id'=>$model->id_usuario));
                                }
                                else
                                print_r($nuevo_estudiante->getErrors());
                            }
                            
                            
                             //esto es para ver los valores de las variables
                             /*var_dump($tipo);
                             die;
                             */
                            
                        }
			//$this->redirect(array('view','id'=>$model->id_usuario));	
                        
		}

		$this->render('create',array(
			'model'=>$model,
                        'cargos'=>$cargos,
                        'instituciones'=>$instituciones,
                        'situaciones'=>$situaciones,
                        'estudiante'=>$estudiante,
                        'carreras'=>$carreras,
                        
                        'contrato'=>$contrato,
                        'ciudad'=>$ciudad,
                        'seccions'=>$seccions,
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

		if(isset($_POST['Usuario']))
		{
			$model->attributes=$_POST['Usuario'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_usuario));
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
		$dataProvider=new CActiveDataProvider('Usuario');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Usuario('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Usuario']))
			$model->attributes=$_GET['Usuario'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Usuario the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Usuario::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Usuario $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuario-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
