<?php

/**
 * This is the model class for table "login".
 *
 * The followings are the available columns in table 'login':
 * @property integer $id_rut
 * @property string $pass
 * @property string $cargo
 * @property string $nombre
 * @property integer $usuario_id_usuario
 *
 * The followings are the available model relations:
 * @property Accion[] $accions
 * @property Conectado[] $conectados
 * @property Usuario $usuarioIdUsuario
 */
class Login extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'login';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_rut, pass, cargo, nombre, usuario_id_usuario', 'required'),
			array('id_rut, usuario_id_usuario', 'numerical', 'integerOnly'=>true),
			array('cargo, nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_rut, cargo, nombre, usuario_id_usuario', 'safe', 'on'=>'search'),
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
			'accions' => array(self::HAS_MANY, 'Accion', 'login_id_rut'),
			'conectados' => array(self::HAS_MANY, 'Conectado', 'login_id_rut'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usuario_id_usuario' => 'ID de Usuario',
			'id_rut' => 'Rut',
			'nombre' => 'Nombre',
			'pass' => 'Pass',
			'cargo' => 'Cargo',
			
			
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

		$criteria->compare('id_rut',$this->id_rut);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('usuario_id_usuario',$this->usuario_id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Login the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
