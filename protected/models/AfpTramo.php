<?php

/**
 * This is the model class for table "afp_tramo".
 *
 * The followings are the available columns in table 'afp_tramo':
 * @property integer $id
 * @property string $porcentaje
 * @property integer $afp_id_afp
 * @property integer $tramo_id
 *
 * The followings are the available model relations:
 * @property Afp $afpIdAfp
 * @property Tramo $tramo
 * @property Remuneracion[] $remuneracions
 */
class AfpTramo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'afp_tramo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('porcentaje, afp_id_afp, tramo_id', 'required'),
			array('afp_id_afp, tramo_id', 'numerical', 'integerOnly'=>true),
			array('porcentaje', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, porcentaje, afp_id_afp, tramo_id', 'safe', 'on'=>'search'),
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
			'afpIdAfp' => array(self::BELONGS_TO, 'Afp', 'afp_id_afp'),
			'tramo' => array(self::BELONGS_TO, 'Tramo', 'tramo_id'),
			'remuneracions' => array(self::HAS_MANY, 'Remuneracion', 'afp_tramo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'porcentaje' => 'Porcentaje',
			'afp_id_afp' => 'Afp Id Afp',
			'tramo_id' => 'Tramo',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('porcentaje',$this->porcentaje,true);
		$criteria->compare('afp_id_afp',$this->afp_id_afp);
		$criteria->compare('tramo_id',$this->tramo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AfpTramo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
