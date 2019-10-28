<?php

class LiquidacionController extends Controller
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
				'actions'=>array('index','view','exportar'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','exportar'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','index','view'),
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
		$model=new Liquidacion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Liquidacion']))
		{
			$model->attributes=$_POST['Liquidacion'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
         public function actionExportar($id_liquidacion)
         {
             $liquidacion = Liquidacion::model()->findByPk($id_liquidacion);
             $remuneracion = Remuneracion::model()->findByAttributes(array('id_remuneracion'=>$liquidacion->remuneracion_id_remuneracion));
             $usuario = Usuario::model()->findByPk($remuneracion->usuario_id_usuario);
             $beneficio = UsuarioBeneficio::model()->findAllByAttributes(array('usuario_id_usuario'=>$usuario->id_usuario));
             
             $mPDF1 = Yii::app()->ePdf->mpdf();
             $mPDF1->WriteHTML('<h1 align="center"> Liquidación de Sueldo</h1>');

             
             if($liquidacion->horas_extra == NULL)
             	$h_s = 0;
             else
             	$h_s=$liquidacion->horas_extra;
             
             
             $colacion=0;
             $movilizacion=0;
             $viatico=0;

             $trip = Yii::app()->db->createCommand('SELECT * FROM usuario_beneficio WHERE usuario_id_usuario='.$usuario->id_usuario)->queryAll();
             //var_dump($trip);
             //die;
             for($i=0;$i<=2;$i++){
             if($trip[$i][beneficio_id_beneficio] == 1)
             {
                 $colacion=$trip[$i][monto];
             }
             if($trip[$i][beneficio_id_beneficio] == 2)
             {
                 $movilizacion=$trip[$i][monto];
             }
             if($trip[$i][beneficio_id_beneficio] == 3)
             {
                 $viatico=$trip[$i][monto];
             }
             }
             
             if ($liquidacion->mes == 1)
                 $meses=Enero;
             if ($liquidacion->mes == 2)
                 $meses=Febrero;
             if ($liquidacion->mes == 3)
                 $meses=Marzo;
             if ($liquidacion->mes == 4)
                  $meses=Abril;
             if ($liquidacion->mes == 5)
                  $meses=Mayo;
             if ($liquidacion->mes == 6)
                  $meses=Junio;
             if ($liquidacion->mes == 7)
                  $meses=Julio;
             if ($liquidacion->mes == 8)
                  $meses=Agosto;
             if ($liquidacion->mes == 9)
                  $meses=Septiembre;
             if ($liquidacion->mes == 10)
                  $meses=Octubre;
             if ($liquidacion->mes == 11)
                  $meses=Noviembre;
             if ($liquidacion->mes == 12)
                  $meses=Diciembre;
             
             $totalbeneficios = $colacion+$movilizacion+$viatico+$h_s;
             $sumatotal = $liquidacion->sueldo_liquido+$totalbeneficios;
             $totalhaber = $remuneracion->sueldo_bruto+$totalbeneficios;

             $seguro = Seguro::model()->findByAttributes(array('remuneracion_id_remuneracion'=>$remuneracion->id_remuneracion));
             $seguro_cesante = (int)$remuneracion->porcent_cesante;
             $total_desc = $seguro_cesante+$liquidacion->descuento_afp+$liquidacion->descuento_isapre+$liquidacion->descuento_fonasa+$liquidacion->descuento_apv+$liquidacion->descuento_imp_renta;

             $mPDF1->WriteHTML
             (' <p style="line-height:10px;" >RUT : '.$usuario->rut.'-'.$usuario->dv.'</p>
                <p style="line-height:10px;" >NOMBRE : '.$usuario->Nombres.' '.$usuario->apellido_p.' '.$usuario->apellido_m.'</p>	
                <p style="line-height:10px;" >PERIODO : '.$meses.' '.$liquidacion->agno.'</p>
                <p align="center">
                
                <TABLE BORDER=2 width=100%> 
                <TR> 
                    <TH><hr style="color: #000000;"/>Haberes del Trabajador<hr style="color: #000000;"/></TH> 
                    <TH></TH>
                    <TH><hr style="color: #000000;"/>Valor<hr style="color: #000000;"/></TH>             
                </TR> 
                <TR> 
                    <TD>Sueldo Base	</TD> 
                    <td align=right>$</td>
                    <TD align=right>'.$remuneracion->sueldo_bruto.'</TD> 
                </TR> 
                <TR> 
                    <TD>Otros Ingresos Imponibles</TD> 
                    <TD align=right>$</TD> 
                    <TD align=right>0</TD> 
                </TR> 
                <TR> 
                    <TD><b>Total Remuneración Imponible</b></TD> 
                    <TD align=right>$</TD> 
                    <TD align=right>'.$remuneracion->sueldo_bruto.'</TD>
                 </TR> 
                <TR> 
                    <TD>Colación</TD>
                    <TD align=right>$</TD> 
                    <TD align=right>'.$colacion.' </TD> 
                </TR>
                <TR> 
                    <TD>Movilización</TD> 
                    <TD align=right>$</TD> 
                    <TD align=right>'.$movilizacion.' </TD> 
                </TR>
                <TR> 
                    <TD>Horas Extras</TD>
                    <TD align=right>$</TD>
                    <TD align=right>'.$h_s.'</TD> 
                </TR>
                <TR> 
                    <TD><b>Total de Haberes</b></TD>
                    <TD align=right>$</TD>
                    <TD align=right>'.$totalhaber.'</TD> 
                </TR>
                
                <TR> 
                    <TH><hr style="color: #000000;"/>Descuentos<hr style="color: #000000;"/></TH>
                    <TH></TH>
                    <TH><hr style="color: #000000;"/>Valor<hr style="color: #000000;"/></TH>            
                </TR> 
                <TR> 
                    <TD>Cotización Previsional (AFP o INP)</TD> 
                    <TD align=right>$</TD>
                    <TD align=right>'.$liquidacion->descuento_afp.'</TD> 
                </TR> 
                <TR> 
                    <TD>Cotización Salud (Isapre)</TD>
                    <TD align=right>$</TD>
                    <TD align=right>'.$liquidacion->descuento_isapre.' </TD> 
                </TR> 
                <TR> 
                    <TD>Cotización Salud (Fonasa)</TD>
                    <TD align=right>$</TD>
                    <TD align=right>'.$liquidacion->descuento_fonasa.' </TD> 
                </TR>
                <TR> 
                    <TD>Cotización Voluntaria (APV)</TD>
                    <TD align=right>$</TD>
                    <TD align=right>'.$liquidacion->descuento_apv.' </TD> 
                </TR> 
                <TR> 
                    <TD><b>Total Descuentos Previsionales</b></TD>
                    <TD align=right>$</TD>
                    <TD align=right>'.$total1=$liquidacion->descuento_afp+$liquidacion->descuento_isapre+$liquidacion->descuento_fonasa+$liquidacion->descuento_apv .'</TD> 
                </TR>
                <TR> 
                    <TD>Seguro de Cesantía </TD>
                    <TD align=right>$</TD>
                    <TD align=right>'.$seguro_cesante.' </TD> 
                </TR> 
                <TR> 
                    <TD>Impuesto a la renta </TD>
                    <TD align=right>$</TD>
                    <TD align=right>'.$liquidacion->descuento_imp_renta.' </TD> 
                </TR>
                <TR> 
                    <TD><b>Total de Descuentos</b></TD>
                    <TD align=right>$</TD>
                    <TD align=right>'.$total_desc.' </TD> 
                </TR>
                <TR> 
                    <TD align="center"><hr style="color: #000000;"/>Detalle Ahorro Fondo Cesantía (Empleador)<hr style="color: #000000;"/></TD>
                    <TD></TD>
                    <TD align="center"><hr style="color: #000000;"/>Valor<hr style="color: #000000;"/></TD>            
                </TR> 
                <TR> 
                    <TD> Cuenta Individual </TD>
                    <TD align=right>$</TD>
                    <TD align=right>'.$seguro->ci.' </TD> 
                </TR>
                <TR> 
                    <TD> Fondo Solidario </TD>
                    <TD align=right>$</TD>
                    <TD align=right>'.$seguro->fs.' </TD> 
                </TR> 
                <TR>
                    <TH><hr style="color: #000000;"/>SALDO LIQUIDO A PAGAR<hr style="color: #000000;"/></TH>
                    <TH align=right>$</TH>
                    <TH align=right><hr style="color: #000000;"/>'.$sumatotal.'<hr style="color: #000000;"/></TH>
                </TR>
                </TABLE>
                <P align = "center">Certifico que he recibido de mi Empleador "Sociedad Comercial El Tigre Limitada"
                a mi total y entera satisfacción el saldo líquido indicado en la presente liquidación, sin tener cargo ni cobro posterior alguno que hacer, por los conceptos de esta liquidación.</P>
                <br><br>



                                                                            <p>____________________________________
                                                                                     Firma del Trabajador   
             ');
                $mPDF1->Output(); 
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

		if(isset($_POST['Liquidacion']))
		{
			$model->attributes=$_POST['Liquidacion'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('Liquidacion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Liquidacion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Liquidacion']))
			$model->attributes=$_GET['Liquidacion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Liquidacion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Liquidacion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Liquidacion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='liquidacion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
