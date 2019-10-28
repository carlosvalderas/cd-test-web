<?php

/**
 * This is the model class for table "seguro".
 *
 * The followings are the available columns in table 'seguro':
 * @property integer $id
 * @property integer $ci
 * @property integer $fs
 * @property integer $remuneracion_id_remuneracion
 *
 * The followings are the available model relations:
 * @property Remuneracion $remuneracionIdRemuneracion
 */
class Seguro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seguro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, remuneracion_id_remuneracion', 'required'),
			array('id, ci, fs, remuneracion_id_remuneracion', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ci, fs, remuneracion_id_remuneracion', 'safe', 'on'=>'search'),
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
			'remuneracionIdRemuneracion' => array(self::BELONGS_TO, 'Remuneracion', 'remuneracion_id_remuneracion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ci' => 'Ci',
			'fs' => 'Fs',
			'remuneracion_id_remuneracion' => 'Remuneracion Id Remuneracion',
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
		$criteria->compare('ci',$this->ci);
		$criteria->compare('fs',$this->fs);
		$criteria->compare('remuneracion_id_remuneracion',$this->remuneracion_id_remuneracion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Seguro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
