<?php

/**
 * This is the model class for table "usuario_beneficio".
 *
 * The followings are the available columns in table 'usuario_beneficio':
 * @property integer $id_usuario_beneficio
 * @property string $monto
 * @property string $f_inicio
 * @property string $f_fin
 * @property integer $beneficio_id_beneficio
 * @property integer $usuario_id_usuario
 *
 * The followings are the available model relations:
 * @property Beneficio $beneficioIdBeneficio
 * @property Usuario $usuarioIdUsuario
 */
class UsuarioBeneficio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario_beneficio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('monto, f_inicio, beneficio_id_beneficio, usuario_id_usuario', 'required'),
			array('beneficio_id_beneficio, usuario_id_usuario', 'numerical', 'integerOnly'=>true),
			array('monto, f_inicio, f_fin', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_usuario_beneficio, monto, f_inicio, f_fin, beneficio_id_beneficio, usuario_id_usuario', 'safe', 'on'=>'search'),
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
			'beneficioIdBeneficio' => array(self::BELONGS_TO, 'Beneficio', 'beneficio_id_beneficio'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario_beneficio' => 'Id Usuario Beneficio',
			'monto' => 'Monto',
			'f_inicio' => 'Fecha Inicio',
			'f_fin' => 'Fecha terminó',
			'beneficio_id_beneficio' => 'Beneficio Id Beneficio',
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

		$criteria->compare('id_usuario_beneficio',$this->id_usuario_beneficio);
		$criteria->compare('monto',$this->monto,true);
		$criteria->compare('f_inicio',$this->f_inicio,true);
		$criteria->compare('f_fin',$this->f_fin,true);
		$criteria->compare('beneficio_id_beneficio',$this->beneficio_id_beneficio);
		$criteria->compare('usuario_id_usuario',$this->usuario_id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsuarioBeneficio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function buscar_beneficios($id)
	{
		$usuarios = array();
		foreach(UsuarioBeneficio::model()->findAllByAttributes(array('usuario_id_usuario'=>$id)) as $usuario)
		{
			$usuarios[] = array('monto'=> $usuario->monto, 'nombre_bene'=> $usuario->beneficioIdBeneficio->nombre);
		}
		return $usuarios;

	}
}
