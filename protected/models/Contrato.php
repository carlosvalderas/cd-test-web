<?php

/**
 * This is the model class for table "contrato".
 *
 * The followings are the available columns in table 'contrato':
 * @property integer $id_contrato
 * @property integer $dia
 * @property integer $mes
 * @property integer $anio
 * @property string $condiciones
 * @property integer $dias_abandono
 * @property integer $ejemplares
 * @property integer $jornada_id_jornada
 * @property integer $usuario_id_usuario
 * @property string $servicios
 * @property integer $dia_termino
 * @property integer $mes_termino
 * @property integer $anio_termino
 *
 * The followings are the available model relations:
 * @property Jornada $jornadaIdJornada
 * @property Usuario $usuarioIdUsuario
 */
class Contrato extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contrato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dia, mes, anio, dias_abandono, jornada_id_jornada, usuario_id_usuario, servicios', 'required'),
			array('dia, mes, anio, dias_abandono, ejemplares, jornada_id_jornada, usuario_id_usuario, dia_termino, mes_termino, anio_termino', 'numerical', 'integerOnly'=>true),
			array('condiciones, servicios', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_contrato, dia, mes, anio, condiciones, dias_abandono, ejemplares, jornada_id_jornada, usuario_id_usuario, servicios, dia_termino, mes_termino, anio_termino', 'safe', 'on'=>'search'),
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
			'jornadaIdJornada' => array(self::BELONGS_TO, 'Jornada', 'jornada_id_jornada'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_contrato' => 'Id Contrato',
			'dia' => 'Dia',
			'mes' => 'Mes',
			'anio' => 'Año',
			'condiciones' => 'Condiciones',
			'dias_abandono' => 'Dias Abandono',
			'ejemplares' => 'Ejemplares',
			'jornada_id_jornada' => 'Jornada',
			'usuario_id_usuario' => 'Id Usuario',
			'servicios' => 'Servicios',
			'dia_termino' => 'Dia Termino',
			'mes_termino' => 'Mes Termino',
			'anio_termino' => 'Año Termino',
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

		$criteria->compare('id_contrato',$this->id_contrato);
		$criteria->compare('dia',$this->dia);
		$criteria->compare('mes',$this->mes);
		$criteria->compare('anio',$this->anio);
		$criteria->compare('condiciones',$this->condiciones,true);
		$criteria->compare('dias_abandono',$this->dias_abandono);
		$criteria->compare('ejemplares',$this->ejemplares);
		$criteria->compare('jornada_id_jornada',$this->jornada_id_jornada);
		$criteria->compare('usuario_id_usuario',$this->usuario_id_usuario);
		$criteria->compare('servicios',$this->servicios,true);
		$criteria->compare('dia_termino',$this->dia_termino);
		$criteria->compare('mes_termino',$this->mes_termino);
		$criteria->compare('anio_termino',$this->anio_termino);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contrato the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
