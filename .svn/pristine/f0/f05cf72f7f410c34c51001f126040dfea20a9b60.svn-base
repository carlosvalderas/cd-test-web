<?php

/**
 * This is the model class for table "contrato_estudiante".
 *
 * The followings are the available columns in table 'contrato_estudiante':
 * @property integer $id_contrato_estudiante
 * @property integer $id_ciudad
 * @property integer $dia
 * @property integer $mes
 * @property integer $a単o
 * @property integer $id_estudiante
 * @property string $condiciones
 * @property string $horas
 * @property integer $id_jornada
 * @property integer $id_beneficio
 * @property integer $dias_abandono
 * @property integer $ejemplares
 * @property integer $jornada_id_jornada
 * @property integer $jornada_Empleado_id_empleado
 * @property integer $jornada_Empleado_Empresa_id_empresa
 * @property integer $institucion_id_institucion
 * @property integer $beneficio_id_beneficio
 */
class ContratoEstudiante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contrato_estudiante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jornada_id_jornada, jornada_Empleado_id_empleado, jornada_Empleado_Empresa_id_empresa, institucion_id_institucion, beneficio_id_beneficio', 'required'),
			array('id_ciudad, dia, mes, a単o, id_estudiante, id_jornada, id_beneficio, dias_abandono, ejemplares, jornada_id_jornada, jornada_Empleado_id_empleado, jornada_Empleado_Empresa_id_empresa, institucion_id_institucion, beneficio_id_beneficio', 'numerical', 'integerOnly'=>true),
			array('condiciones, horas', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_contrato_estudiante, id_ciudad, dia, mes, a単o, id_estudiante, condiciones, horas, id_jornada, id_beneficio, dias_abandono, ejemplares, jornada_id_jornada, jornada_Empleado_id_empleado, jornada_Empleado_Empresa_id_empresa, institucion_id_institucion, beneficio_id_beneficio', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_contrato_estudiante' => 'Id Contrato Estudiante',
			'id_ciudad' => 'Id Ciudad',
			'dia' => 'Dia',
			'mes' => 'Mes',
			'a単o' => 'A祓o',
			'id_estudiante' => 'Id Estudiante',
			'condiciones' => 'Condiciones',
			'horas' => 'Horas',
			'id_jornada' => 'Id Jornada',
			'id_beneficio' => 'Id Beneficio',
			'dias_abandono' => 'Dias Abandono',
			'ejemplares' => 'Ejemplares',
			'jornada_id_jornada' => 'Jornada Id Jornada',
			'jornada_Empleado_id_empleado' => 'Jornada Empleado Id Empleado',
			'jornada_Empleado_Empresa_id_empresa' => 'Jornada Empleado Empresa Id Empresa',
			'institucion_id_institucion' => 'Institucion Id Institucion',
			'beneficio_id_beneficio' => 'Beneficio Id Beneficio',
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

		$criteria->compare('id_contrato_estudiante',$this->id_contrato_estudiante);
		$criteria->compare('id_ciudad',$this->id_ciudad);
		$criteria->compare('dia',$this->dia);
		$criteria->compare('mes',$this->mes);
		$criteria->compare('a単o',$this->a単o);
		$criteria->compare('id_estudiante',$this->id_estudiante);
		$criteria->compare('condiciones',$this->condiciones,true);
		$criteria->compare('horas',$this->horas,true);
		$criteria->compare('id_jornada',$this->id_jornada);
		$criteria->compare('id_beneficio',$this->id_beneficio);
		$criteria->compare('dias_abandono',$this->dias_abandono);
		$criteria->compare('ejemplares',$this->ejemplares);
		$criteria->compare('jornada_id_jornada',$this->jornada_id_jornada);
		$criteria->compare('jornada_Empleado_id_empleado',$this->jornada_Empleado_id_empleado);
		$criteria->compare('jornada_Empleado_Empresa_id_empresa',$this->jornada_Empleado_Empresa_id_empresa);
		$criteria->compare('institucion_id_institucion',$this->institucion_id_institucion);
		$criteria->compare('beneficio_id_beneficio',$this->beneficio_id_beneficio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ContratoEstudiante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
