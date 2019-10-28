<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property integer $id_empresa
 * @property string $razon
 * @property string $rut_representante
 * @property string $nombre_representante
 * @property string $domicilio
 * @property string $ciudad
 * @property integer $ciudad_id_ciudad
 *
 * The followings are the available model relations:
 * @property Empleado[] $empleados
 * @property Ciudad $ciudadIdCiudad
 * @property Estudiante[] $estudiantes
 * @property Postulante[] $postulantes
 */
class Empresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_empresa, ciudad_id_ciudad', 'required'),
			array('id_empresa, ciudad_id_ciudad', 'numerical', 'integerOnly'=>true),
			array('razon, rut_representante, nombre_representante, domicilio, ciudad', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_empresa, razon, rut_representante, nombre_representante, domicilio, ciudad, ciudad_id_ciudad', 'safe', 'on'=>'search'),
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
			'empleados' => array(self::HAS_MANY, 'Empleado', 'Empresa_id_empresa'),
			'ciudadIdCiudad' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_id_ciudad'),
			'estudiantes' => array(self::HAS_MANY, 'Estudiante', 'Empresa_id_empresa'),
			'postulantes' => array(self::HAS_MANY, 'Postulante', 'Empresa_id_empresa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_empresa' => 'Id Empresa',
			'razon' => 'Razon',
			'rut_representante' => 'Rut Representante',
			'nombre_representante' => 'Nombre Representante',
			'domicilio' => 'Domicilio',
			'ciudad' => 'Ciudad',
			'ciudad_id_ciudad' => 'Ciudad Id Ciudad',
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

		$criteria->compare('id_empresa',$this->id_empresa);
		$criteria->compare('razon',$this->razon,true);
		$criteria->compare('rut_representante',$this->rut_representante,true);
		$criteria->compare('nombre_representante',$this->nombre_representante,true);
		$criteria->compare('domicilio',$this->domicilio,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('ciudad_id_ciudad',$this->ciudad_id_ciudad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
