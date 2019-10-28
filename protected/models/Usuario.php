<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id_usuario
 * @property string $Nombres
 * @property string $apellido_p
 * @property string $apellido_m
 * @property integer $rut
 * @property string $dv
 * @property string $telefono
 * @property string $direccion
 * @property string $mail
 * @property integer $cargo_id_cargo
 * @property integer $estado_id_estado
 * @property string $Huella
 * @property string $d_nac
 * @property string $m_nac
 * @property string $a_nac
 * @property string $nacionalidad
 * @property string $estado_civil
 * @property integer $ciudad_id_ciudad
 * @property integer $seccion_idseccion
 *
 * The followings are the available model relations:
 * @property Asistencia[] $asistencias
 * @property Contrato[] $contratos
 * @property Empleado[] $empleados
 * @property Estudiante[] $estudiantes
 * @property Login[] $logins
 * @property Perfil[] $perfils
 * @property Remuneracion[] $remuneracions
 * @property Cargo $cargoIdCargo
 * @property Ciudad $ciudadIdCiudad
 * @property Estado $estadoIdEstado
 * @property Seccion $seccionIdseccion
 * @property UsuarioBeneficio[] $usuarioBeneficios
 * @property UsuarioExcepcion[] $usuarioExcepcions
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombres, apellido_p, apellido_m, rut, dv, direccion, mail, telefono ,estado_id_estado, d_nac, m_nac, a_nac, nacionalidad, estado_civil, ciudad_id_ciudad', 'required'),
			array('rut, cargo_id_cargo, estado_id_estado, ciudad_id_ciudad, seccion_idseccion', 'numerical', 'integerOnly'=>true),
			array('Nombres, apellido_p, apellido_m, dv, telefono, direccion, mail, d_nac, m_nac, a_nac, nacionalidad, estado_civil', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
                        array('Nombres, apellido_p, apellido_m','match','pattern'=>'/^([+]?[a-zA-Z ]+)$/'),
                        array('mail','email'),
                        array('telefono, rut','match','pattern'=>'/^([+]?[0-9]+)$/'),
                        array('dv','match','pattern'=>'/^([+]?[0-9-kK]+)$/'),
			array('id_usuario, Nombres, apellido_p, apellido_m, rut, dv, telefono, direccion, mail, cargo_id_cargo, estado_id_estado, Huella, d_nac, m_nac, a_nac, nacionalidad, estado_civil, ciudad_id_ciudad, seccion_idseccion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'asistencias' => array(self::HAS_MANY, 'Asistencia', 'usuario_id_usuario'),
			'contratos' => array(self::HAS_MANY, 'Contrato', 'usuario_id_usuario'),
			'empleados' => array(self::HAS_MANY, 'Empleado', 'usuario_id_usuario'),
			'estudiantes' => array(self::HAS_MANY, 'Estudiante', 'usuario_id_usuario'),
			'logins' => array(self::HAS_MANY, 'Login', 'usuario_id_usuario'),
			'perfils' => array(self::HAS_MANY, 'Perfil', 'usuario_id_usuario'),
			'remuneracions' => array(self::HAS_MANY, 'Remuneracion', 'usuario_id_usuario'),
			'cargoIdCargo' => array(self::BELONGS_TO, 'Cargo', 'cargo_id_cargo'),
			'ciudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_id_ciudad'),
			'estadoIdEstado' => array(self::BELONGS_TO, 'Estado', 'estado_id_estado'),
			'seccionIdseccion' => array(self::BELONGS_TO, 'Seccion', 'seccion_idseccion'),
			'usuarioBeneficios' => array(self::HAS_MANY, 'UsuarioBeneficio', 'usuario_id_usuario'),
			'usuarioExcepcions' => array(self::HAS_MANY, 'UsuarioExcepcion', 'usuario_id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Id Usuario',
			'Nombres' => 'Nombres',
			'apellido_p' => 'Apellido Paterno',
			'apellido_m' => 'Apellido Materno',
			'rut' => 'Rut',
			'dv' => 'Dígito Verificador',
			'telefono' => 'Teléfono',
			'direccion' => 'Dirección',
			'mail' => 'Correo',
			'cargo_id_cargo' => 'Cargo',
			'estado_id_estado' => 'Estado Id Estado',
			'Huella' => 'Huella',
			'd_nac' => 'Día',
			'm_nac' => 'Mes',
			'a_nac' => 'Año',
			'nacionalidad' => 'Nacionalidad',
			'estado_civil' => 'Estado Civil',
			'ciudad_id_ciudad' => 'Ciudad',
			'seccion_idseccion' => 'Sección',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('Nombres',$this->Nombres,true);
		$criteria->compare('apellido_p',$this->apellido_p,true);
		$criteria->compare('apellido_m',$this->apellido_m,true);
		$criteria->compare('rut',$this->rut);
		$criteria->compare('dv',$this->dv,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('cargo_id_cargo',$this->cargo_id_cargo);
		$criteria->compare('estado_id_estado',$this->estado_id_estado);
		$criteria->compare('Huella',$this->Huella,true);
		$criteria->compare('d_nac',$this->d_nac,true);
		$criteria->compare('m_nac',$this->m_nac,true);
		$criteria->compare('a_nac',$this->a_nac,true);
		$criteria->compare('nacionalidad',$this->nacionalidad,true);
		$criteria->compare('estado_civil',$this->estado_civil,true);
		$criteria->compare('ciudad_id_ciudad',$this->ciudad_id_ciudad);
		$criteria->compare('seccion_idseccion',$this->seccion_idseccion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function listar()
        {
            $usuarios = array();
            $usersito = Usuario::model()->findAllByAttributes(
					array(),
					$condition  = 'cargo_id_cargo = :value1 OR cargo_id_cargo = :value2',
					$params     = array(
					        ':value1' => 1, 
					        ':value2' => 2,
				)
			);
            foreach($usersito as $usuario){
                $usuarios[] = array('id_usuario' => $usuario->id_usuario,'Nombres'=> $usuario->apellido_p." ".$usuario->apellido_m.", ".$usuario->Nombres);
            }
            return $usuarios;
        }
        public function listabene()
        {
            $usuarios = array();
            foreach(Usuario::model()->findAll(array('order'=>'apellido_p,apellido_m')) as $usuario){
                $usuarios[] = array('id_usuario' => $usuario->id_usuario,'Nombres'=> $usuario->apellido_p." ".$usuario->apellido_m.", ".$usuario->Nombres);
            }
            return $usuarios;
        }
        public function cargo()
        {
        	//$prac = "Practicante"
        	if($this->cargo_id_cargo != null){
            $id=$this->cargo_id_cargo;
            $fi=  Cargo::model()->findByPk($id);
            return $fi->nombre;
        	}
        	else{return "Practicante";}
        }
        public function estadio()
        {
            $id=$this->estado_id_estado;
            $fi= Estado::model()->findByPk($id);
            return $fi->nombre;
        }
        public function nombremes()
        {
            $mes=$this->m_nac;
            $mess='';
            if($mes == 1)
                $mess='Enero';
            elseif($mes == 2)
                $mess='Febrero';
            elseif($mes == 3)
                $mess='Marzo';
            elseif($mes == 4)
                $mess='Abril';
            elseif($mes == 5)
                $mess='Mayo';
            elseif($mes == 6)
                $mess='Junio';
            elseif($mes == 7)
                $mess='Julio';
            elseif($mes == 8)
                $mess='Agosto';
            elseif($mes == 9)
                $mess='Septiembre';
            elseif($mes == 10)
                $mess='Octubre';
            elseif($mes == 11)
                $mess='Noviembre';
            elseif($mes == 12)
                $mess='Diciembre';
            return $mess;
        }
}
