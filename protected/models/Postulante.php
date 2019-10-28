<?php

/**
 * This is the model class for table "postulante".
 *
 * The followings are the available columns in table 'postulante':
 * @property integer $id_postulante
 * @property string $informacion_adicional
 * @property integer $renta_esperada
 * @property string $referencias
 * @property integer $Empresa_id_empresa
 *
 * The followings are the available model relations:
 * @property Empresa $empresaIdEmpresa
 */
class Postulante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'postulante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Empresa_id_empresa', 'required'),
			array('renta_esperada, Empresa_id_empresa', 'numerical', 'integerOnly'=>true),
			array('informacion_adicional', 'length', 'max'=>100),
			array('referencias', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_postulante, informacion_adicional, renta_esperada, referencias, Empresa_id_empresa', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_postulante' => 'Id Postulante',
			'informacion_adicional' => 'Informacion Adicional',
			'renta_esperada' => 'Renta Esperada',
			'referencias' => 'Referencias',
			'Empresa_id_empresa' => 'Empresa Id Empresa',
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

		$criteria->compare('id_postulante',$this->id_postulante);
		$criteria->compare('informacion_adicional',$this->informacion_adicional,true);
		$criteria->compare('renta_esperada',$this->renta_esperada);
		$criteria->compare('referencias',$this->referencias,true);
		$criteria->compare('Empresa_id_empresa',$this->Empresa_id_empresa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Postulante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
