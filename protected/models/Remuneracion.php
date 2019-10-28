<?php

/**
 * This is the model class for table "remuneracion".
 *
 * The followings are the available columns in table 'remuneracion':
 * @property integer $id_remuneracion
 * @property integer $sueldo_bruto
 * @property string $porcent_apv
 * @property string $porcent_cesante
 * @property string $porcent_isapre
 * @property string $porcent_fonasa
 * @property string $imp_renta
 * @property integer $isapre_id_isapre
 * @property integer $usuario_id_usuario
 * @property integer $afp_id_afp
 * @property string $uf
 *
 * The followings are the available model relations:
 * @property Liquidacion[] $liquidacions
 * @property Afp $afpIdAfp
 * @property Isapre $isapreIdIsapre
 * @property Usuario $usuarioIdUsuario
 */
class Remuneracion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'remuneracion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sueldo_bruto, usuario_id_usuario, afp_id_afp', 'required'),
			array('sueldo_bruto, isapre_id_isapre, usuario_id_usuario, afp_id_afp', 'numerical', 'integerOnly'=>true),
			array('porcent_apv, porcent_cesante, porcent_isapre, porcent_fonasa, imp_renta, uf', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_remuneracion, sueldo_bruto, porcent_apv, porcent_cesante, porcent_isapre, porcent_fonasa, imp_renta, isapre_id_isapre, usuario_id_usuario, afp_id_afp, uf', 'safe', 'on'=>'search'),
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
			'liquidacions' => array(self::HAS_MANY, 'Liquidacion', 'remuneracion_id_remuneracion'),
			'afpIdAfp' => array(self::BELONGS_TO, 'Afp', 'afp_id_afp'),
			'isapreIdIsapre' => array(self::BELONGS_TO, 'Isapre', 'isapre_id_isapre'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_remuneracion' => 'Id Remuneracion',
			'sueldo_bruto' => 'Sueldo Bruto',
			'porcent_apv' => 'Porcent Apv',
			'porcent_cesante' => 'Porcent Cesante',
			'porcent_isapre' => 'Porcent Isapre',
			'porcent_fonasa' => 'Porcent Fonasa',
			'imp_renta' => 'Imp Renta',
			'isapre_id_isapre' => 'Isapre Id Isapre',
			'usuario_id_usuario' => 'Usuario Id Usuario',
			'afp_id_afp' => 'Afp Id Afp',
			'uf' => 'Uf',
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

		$criteria->compare('id_remuneracion',$this->id_remuneracion);
		$criteria->compare('sueldo_bruto',$this->sueldo_bruto);
		$criteria->compare('porcent_apv',$this->porcent_apv,true);
		$criteria->compare('porcent_cesante',$this->porcent_cesante,true);
		$criteria->compare('porcent_isapre',$this->porcent_isapre,true);
		$criteria->compare('porcent_fonasa',$this->porcent_fonasa,true);
		$criteria->compare('imp_renta',$this->imp_renta,true);
		$criteria->compare('isapre_id_isapre',$this->isapre_id_isapre);
		$criteria->compare('usuario_id_usuario',$this->usuario_id_usuario);
		$criteria->compare('afp_id_afp',$this->afp_id_afp);
		$criteria->compare('uf',$this->uf,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Remuneracion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
