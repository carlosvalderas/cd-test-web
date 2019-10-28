<?php

class ContratoController extends Controller
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
				'actions'=>array('create','update','index','view','exportar'),
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
		$model=new Contrato;
                //$id=1;
                //$idds = Yii::app()->getSession()->get('ide');
                $id= Yii::app()->getSession()->get('ide');
                
                $user = Usuario::model()->findByPk($id);
                $ciudad = Ciudad::model()->findByPk($user->ciudad_id_ciudad);
                $cargo = Cargo::model()->findByPk($user->cargo_id_cargo);
                $seccion= Seccion::model()->findByPk($user->seccion_idseccion);
                $user_beneficio = new UsuarioBeneficio;
                $user_beneficio1 = new UsuarioBeneficio1;
                $user_beneficio2 = new UsuarioBeneficio2;
                $beneficio =  Beneficio::model()->findAll();
                $remuneracion = new Remuneracion;
                $isapre = Isapre::model()->findAll();
                
                $afp = Afp::model()->findAll();
                
                $empresa = Empresa::model()->findByPk("799874504");
                $ciudad_e = Ciudad::model()->findByPk($empresa->ciudad_id_ciudad);
                $jornada= Jornada::model()->findAll();
                $jornadaSearch = new Jornada('search');
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                // campos llenados
                
                
                
		
		if(isset($_POST['Contrato']))
		{
                    $model->attributes=$_POST['Contrato'];
                    $model->usuario_id_usuario=$id;
                    $model->dia = date('d');
                    $model->anio = date('Y');
                    $model->mes = date('m');  
                    $model->ejemplares=2;  
                    $fechita=$_POST['fechatermino'];
                    
                    if($fechita!='' || $fechita != NULL)
                    {
                    $fechaterminio = explode('-', $fechita);
                    $model->dia_termino = $fechaterminio[0];
                    $model->mes_termino = $fechaterminio[1];
                    $model->anio_termino = $fechaterminio[2];
                    }
                    //var_dump($fechaterminio);
                    //die;
                    if($model->validate())
                    {
                            if($_POST['UsuarioBeneficio']['monto']!==null)
                            {
                                 $user_beneficio->attributes=$_POST['UsuarioBeneficio'];
                                 $user_beneficio->usuario_id_usuario=$id;
                                 if($user_beneficio->validate())
                                 {
                                     $user_beneficio->save();
                                 }
                            }
                           if($_POST['UsuarioBeneficio1']['monto']!==null)
                            {
                                 $user_beneficio1->attributes=$_POST['UsuarioBeneficio1'];
                                 $user_beneficio1->usuario_id_usuario=$id;
                                 if($user_beneficio1->validate())
                                 {
                                     $user_beneficio1->save();
                                 }
                            }
                            if($_POST['UsuarioBeneficio2']['monto']!==null)
                            {
                                 $user_beneficio2->attributes=$_POST['UsuarioBeneficio2'];
                                 $user_beneficio2->usuario_id_usuario=$id;
                                 if($user_beneficio2->validate())
                                 {
                                     $user_beneficio2->save();
                                 }
                            }
                            if($_POST['Remuneracion']['sueldo_bruto'] !== null)
                            {
                                $remuneracion->sueldo_bruto = $_POST['Remuneracion']['sueldo_bruto'];
                                $remuneracion->afp_id_afp = $_POST['Remuneracion']['afp_id_afp'];
                                $remuneracion->porcent_apv = 0;

                                


                                $remuneracion->usuario_id_usuario = $id;
                                $remuneracion->imp_renta = 0;
                                
                                $radio = $_POST['tipo'];
                                if($radio == 'Fonasa'){
                                    $remuneracion->porcent_fonasa = 7;
                                    $remuneracion->porcent_isapre = 0;
                                }
                                if($radio == 'Isapre'){
                                    $remuneracion->porcent_isapre = $_POST['Remuneracion']['porcent_isapre'];
                                    $remuneracion->isapre_id_isapre = $_POST['Remuneracion']['isapre_id_isapre'];
                                    $remuneracion->porcent_fonasa = 0;
                                }

                                if($remuneracion->validate())
                                {
                                    
                                    if($fechita!='' || $fechita != NULL)
                                    {
                                        $remuneracion->porcent_cesante = 0;
                                        $cuenta_individual = $remuneracion->sueldo_bruto*0.028;
                                        $fondo_solidario = $remuneracion->sueldo_bruto*0.002;
                                    }
                                    else
                                    {
                                        $remuneracion->porcent_cesante = $remuneracion->sueldo_bruto*0.006;
                                        $cuenta_individual = $remuneracion->sueldo_bruto*0.016;
                                        $fondo_solidario = $remuneracion->sueldo_bruto*0.008;
                                    }

                                    $seguro = new Seguro;
                                    $remuneracion->save();
                                    $seguro->remuneracion_id_remuneracion = $remuneracion->id_remuneracion;


                                    $seguro->ci = $cuenta_individual;
                                    $seguro->fs = $fondo_solidario;
                                    $seguro->id = $id;

                                    $seguro->save();
                                    $model->save();
                                    
                                    
                                    $this->redirect(Yii::app()->createUrl('usuario/view&id='.$model->usuario_id_usuario));
                                }

                            }
                            
                    
                    
                    
                   
                    } 
                    
                    
                    
                    //print_r($model->getErrors());
                } 

                
		$this->render('create',array(
			'model'=>$model,
                        'user'=>$user,
                        'user_beneficio'=>$user_beneficio,
                        'user_beneficio1'=>$user_beneficio1,
                        'user_beneficio2'=>$user_beneficio2,
                        'beneficio'=>$beneficio,
                        'remuneracion'=>$remuneracion,
                        'isapre'=>$isapre,
                        
                        'afp'=>$afp,
                        
                        'empresa'=>$empresa,
                        'ciudad_e'=>$ciudad_e,
                        'ciudad'=>$ciudad,
                        'cargo'=>$cargo,
                        'seccion'=>$seccion,
                        'jornada'=>$jornada,
                        'jornadaSearch'=>$jornadaSearch
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
        public function actionExportar($id_contrato){
            
            $contrato = Contrato::model()->findByPk($id_contrato);
            $usuario = $contrato->usuarioIdUsuario;
            $empresa1 ="799874504";
            
            $empresa = Empresa::model()->findByPk($empresa1);
            $ciudad=  Ciudad::model()->findByPk($empresa->ciudad_id_ciudad);
            $ciudad_user = Ciudad::model()->findByPk($usuario->ciudad_id_ciudad);
            $cargo = Cargo::model()->findByPk($usuario->cargo_id_cargo);
            $seccion = Seccion::model()->findByPk($usuario->seccion_idseccion);
            $remuneracion = Remuneracion::model()->findByAttributes(array('usuario_id_usuario'=>$usuario->id_usuario));

            $usuario_beneficio = UsuarioBeneficio::model()->buscar_beneficios($usuario->id_usuario);
            $contador = 0;
            $montos_bene = '<br>';
            foreach($usuario_beneficio as $tortuga)
            {
                $contador = $contador + 1;
                $montos_bene = $montos_bene.''.$contador.') '.$tortuga['nombre_bene'].' = '.$tortuga['monto']. '<br>';
            }

            $tiempo = Jornada::model()->calculo($contrato->jornada_id_jornada);

            // horas semanales
            // lunes a 
            // 00:00 a 00:00
            // descanso 00:00 a 00:00
            // tiempo sera cargo del ?????
            
            
            $mPDF1 = Yii::app()->ePdf->mpdf();
            $mPDF1->WriteHTML('<h1 align="center"> Contrato de Trabajo</h1><br>');
            $mPDF1->WriteHTML
            ('<br><p align="justify">En '.$ciudad->nombre.', a '.$contrato->dia.' de '.$contrato->mes.' 
            de '.$contrato->anio.'
            entre (nombre o razón social)Soc. Comercial El Tigre LTDA., 
            R.U.T 79.871.354-2, representado(a) legalmente por don(a) '.$empresa->nombre_representante.'., 
            cédula de identidad '.$empresa->rut_representante.'., 
            ambos con domicilio en '.$empresa->domicilio.'
            comuna de '.$ciudad->nombre.' ., en adelante 
            el "Empleador" 
            y don '.$usuario->Nombres.' '.$usuario->apellido_p.' '.$usuario->apellido_m.'
            de nacionalidad '.$usuario->nacionalidad.', 
            nacido el '.$usuario->d_nac.' de '.$usuario->m_nac.' de '.$usuario->a_nac.', 
            domiciliado en '.$usuario->direccion.', 
            comuna de '.$ciudad->nombre.'   RUT '.$usuario->rut.'-'.$usuario->dv.' ., 
            en adelante "Trabajador". Se ha convenido el siguiente 
            Contrato Individual de Trabajo:</p>

            <p align="justify">PRIMERO : El trabajador se compromete y obliga a prestar servicios 
            como '.$cargo->nombre.' 
            u otro trabajo o función similar, que tenga directa relación con el cargo ya indicado, 
            en el Departamento (Sección) de '.$seccion->nombre_sec.', 
            ubicado en '.$ciudad->nombre.' , 
            comuna de '.$ciudad->nombre.', pudiendo ser trasladado a otro Departamento o Sección de la Oficina 
            Principal o de cualquiera de las Agencias del Empleador, 
            a condición que se trate de labores similares, en la misma ciudad, 
            y sin que ello importe menoscabo para el trabajador, 
            todo ello sujeto a las necesidades operativas de la Empresa.</p>
            
            <p align="justify">SEGUNDO : JORNADA DE TRABAJO
            El trabajador cumplirá una jornada semanal ordinaria de '.$tiempo[0]['horas'].' horas, 
            de acuerdo a la siguiente distribución diaria: '.$tiempo[0]['dias'].', 
            de '.$tiempo[0]['horario'].' horas. 
            La jornada de trabajo será interrumpida con un descanso de '.$tiempo[0]['descanso'].'  , 
            entre las '.$tiempo[0]['desc_hora'].' horas, destinados a la colación.
            
            <p align="justify">TERCERO: Cuando por necesidades de funcionamiento de la Empresa, 
            sea necesario pactar trabajo en tiempo extraordinario, el Empleado que lo acuerde 
            desde luego se obligará a cumplir el horario que al efecto determine la Empleadora, 
            dentro de los límites legales. Dicho acuerdo constará por escrito y se firmará por ambas partes, 
            previamente a la realización del trabajo.
            A falta de acuerdo, queda prohibido expresamente al Empleado trabajar sobretiempo o simplemente 
            permanecer en el recinto de la Empresa, después de la hora diaria de salida, salvo en los casos a 
            que se refiere el inciso precedente.
            El tiempo extraordinario trabajado de acuerdo a las estipulaciones precedentes, se remunerará con el 
            recargo legal correspondiente y se liquidará y pagará conjuntamente con la remuneración del respectivo período.</p>
            
            <p align="justify">CUARTO: El empleado percibirá un sueldo de 
            $'
            .$remuneracion->sueldo_bruto.' mensuales, 
            pagaderos por meses vencidos.
            Las deducciones que la Empleadora podrá según los casos - practicar a las remuneraciones, 
            son todas aquéllas que dispone el artículo 58 del Código del Trabajo.</p>
            
            <p align="justify">QUINTO : El trabajador, asimismo, acepta y autoriza al Empleador para que haga las deducciones 
            que establecen las leyes vigentes y, para que le descuente el tiempo no trabajado debido a atrasos, 
            inasistencias o permisos y, además, la rebaja del monto de las multas establecidas en el Reglamento 
            Interno de Orden, Higiene y Seguridad, en caso que procedieren.</p>
            
            <p align="justify">SEXTO: La Empresa se obliga a pagar al empleado una gratificación anual equivalente 
            al 25% (veinticinco por ciento) del total de las remuneraciones mensuales que éste hubiere percibido 
            en el año, con tope de 4,75 Ingresos Mínimos Mensuales. 
            Esta gratificación se calculará, liquidará y anticipará mensualmente en forma coetánea con la 
            remuneración del mes respectivo, siendo cada abono equivalente a la doceava parte de la gratificación anual.
            La gratificación así convenida es incompatible y sustituye a la que resulte de la aplicación 
            de los artículos 47 y siguientes del Código del Trabajo.
            Para los efectos de cotejar la gratificación convenida en esta cláusula con la que, según la 
            ley, eventualmente podría corresponder al Empleado, los valores anticipados mensualmente 
            se reajustarán en conformidad con lo dispuesto en el artículo 63 del Código del Trabajo, 
            y se entenderá que fueron abonados con carácter de anticipos de dichas gratificaciones legales.
            Con todo, si las sumas anticipadas a título de gratificación convencional resultaren mayores 
            que las que legalmente correspondieren al Empleador, el exceso se consolidará en su beneficio.</p>
            
            <p align="justify">SÉPTIMO: El empleador se compromete a otorgar o suministrar al trabajador 
            los siguientes beneficios:
            '.$montos_bene.'
            El trabajador se obliga y compromete expresamente a cumplir las instrucciones 
            que le sean impartidas por su jefe inmediato o por la Gerencia de la empresa y, 
            acatar en todas sus partes las disposiciones establecidas en el Reglamento de Orden, 
            Higiene y Seguridad las que declara conocer y que, para estos efectos se consideran 
            parte integrante del presente contrato, reglamento del cual el trabajador recibe un ejemplar en este acto.</p>
            
            <p align="justify">OCTAVO : Las partes acuerdan en este acto que los atrasos reiterados, 
            sin causa justificada, de parte del trabajador, se considerarán incumplimiento grave de las obligaciones 
            que impone el presente contrato y darán lugar a la aplicación de la caducidad del contrato, 
            contemplada en el art. .160 Nº7 del Código del Trabajo
            Se entenderá por atraso reiterado el llegar después de la hora de ingreso 
            durante 2 días seguidos o no, en cada mes calendario. 
            Bastará para acreditar esta situación la constancia en el respectivo Control de Asistencia.</p>
            
            <p align="justify">NOVENO: El presente contrato regirá hasta '.$contrato->dia_termino.'/'.$contrato->mes_termino.'/'.$contrato->anio_termino.'
            , pero cualquiera de las partes, o ambas, según el caso, podrán ponerle término en cualquier momento 
            con arreglo a la ley.</p>
            
            <p align="justify">DECIMO: Para todas las cuestiones a que eventualmente pueda dar origen este contrato, 
            las partes fijan domicilio en la ciudad de Santiago.</p>
            
            <p align="justify">DECIMO PRIMERO : Se deja constancia que el Empleado ingresó al servicio de la Empresa 
            con fecha '.$contrato->dia.' de '.$contrato->mes.' de '.$contrato->anio.'.
            El presente contrato se firma en dos ejemplares, quedando en este mismo acto uno en poder de cada contratante.
             </p>');
            
            $mPDF1->WriteHTML(
            '
             <style>
            table, td, th {
            margin-left: 10%;
            margin-top: 50%;
            
            }
            </style>
   
            <table width="90%">
            <tr>        
            <td align="left">........................................</td>
            <td align="right">.......................................</td>
            </tr>
            
            <tr>
            <td align="left">Firma Empleador</td>
            <td align="right">Firma Trabajador</td>
            </tr>
            <tr>
            <td>RUT : .................................</td>
            <td align="right">RUT : '.$usuario->rut.'-'.$usuario->dv.'</td>
            </tr>
            </table>'
            );
            
            /* @var $mPDF1 type */
            $mPDF1->Output(); 
        }
	/**
	 * Lists all models.
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Contrato']))
		{
			$model->attributes=$_POST['Contrato'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_contrato));
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
		$dataProvider=new CActiveDataProvider('Contrato');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Contrato('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Contrato']))
			$model->attributes=$_GET['Contrato'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Contrato the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Contrato::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Contrato $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='contrato-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
