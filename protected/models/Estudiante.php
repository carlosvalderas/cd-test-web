<?php

/**
 * This is the model class for table "estudiante".
 *
 * The followings are the available columns in table 'estudiante':
 * @property integer $id_estudiante
 * @property string $profesor_guia
 * @property integer $Empresa_id_empresa
 * @property integer $institucion_id_institucion
 * @property integer $carrera_id_carrera
 * @property integer $situacion_academica_id_situacion_academica
 * @property integer $usuario_id_usuario
 *
 * The followings are the available model relations:
 * @property Empresa $empresaIdEmpresa
 * @property Carrera $carreraIdCarrera
 * @property Institucion $institucionIdInstitucion
 * @property SituacionAcademica $situacionAcademicaIdSituacionAcademica
 * @property Usuario $usuarioIdUsuario
 */
class Estudiante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estudiante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('profesor_guia, institucion_id_institucion, carrera_id_carrera, situacion_academica_id_situacion_academica, usuario_id_usuario', 'required'),
			array('Empresa_id_empresa, institucion_id_institucion, carrera_id_carrera, situacion_academica_id_situacion_academica, usuario_id_usuario', 'numerical', 'integerOnly'=>true),
			array('profesor_guia', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_estudiante, profesor_guia, Empresa_id_empresa, institucion_id_institucion, carrera_id_carrera, situacion_academica_id_situacion_academica, usuario_id_usuario', 'safe', 'on'=>'search'),
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
			'empresaIdEmpresa' => array(self::BELONGS_TO, 'Empresa', 'Empresa_id_empresa'),
			'carreraIdCarrera' => array(self::BELONGS_TO, 'Carrera', 'carrera_id_carrera'),
			'institucionIdInstitucion' => array(self::BELONGS_TO, 'Institucion', 'institucion_id_institucion'),
			'situacionAcademicaIdSituacionAcademica' => array(self::BELONGS_TO, 'SituacionAcademica', 'situacion_academica_id_situacion_academica'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_estudiante' => 'Id Estudiante',
			'profesor_guia' => 'Profesor Guía',
			'Empresa_id_empresa' => 'Empresa Id Empresa',
			'institucion_id_institucion' => 'Institución',
			'carrera_id_carrera' => 'Carrera Id Carrera',
			'situacion_academica_id_situacion_academica' => 'Situación Académica',
			'usuario_id_usuario' => 'Usuario Id Usuario',
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

		$criteria->compare('id_estudiante',$this->id_estudiante);
		$criteria->compare('profesor_guia',$this->profesor_guia,true);
		$criteria->compare('Empresa_id_empresa',$this->Empresa_id_empresa);
		$criteria->compare('institucion_id_institucion',$this->institucion_id_institucion);
		$criteria->compare('carrera_id_carrera',$this->carrera_id_carrera);
		$criteria->compare('situacion_academica_id_situacion_academica',$this->situacion_academica_id_situacion_academica);
		$criteria->compare('usuario_id_usuario',$this->usuario_id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estudiante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
