<?php

/**
 * This is the model class for table "accion".
 *
 * The followings are the available columns in table 'accion':
 * @property integer $id_accion
 * @property string $accion
 * @property string $fecha
 * @property string $hora
 * @property integer $login_id_rut
 *
 * The followings are the available model relations:
 * @property Login $loginIdRut
 */
class Accion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'accion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('accion, fecha, hora, login_id_rut', 'required'),
			array('login_id_rut', 'numerical', 'integerOnly'=>true),
			array('accion, fecha, hora', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_accion, accion, fecha, hora, login_id_rut', 'safe', 'on'=>'search'),
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
			'loginIdRut' => array(self::BELONGS_TO, 'Login', 'login_id_rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_accion' => 'Id Accion',
			'accion' => 'Accion',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'login_id_rut' => 'Login Id Rut',
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

		$criteria->compare('id_accion',$this->id_accion);
		$criteria->compare('accion',$this->accion,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('login_id_rut',$this->login_id_rut);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Accion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
