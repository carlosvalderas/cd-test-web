<?php

/**
 * This is the model class for table "jornada".
 *
 * The followings are the available columns in table 'jornada':
 * @property integer $id_jornada
 * @property string $nombre
 * @property string $h_entrada1
 * @property string $h_salida1
 * @property string $h_entrada2
 * @property string $h_salida2
 * @property string $dia_inicio
 * @property string $dia_termino
 *
 * The followings are the available model relations:
 * @property Contrato[] $contratos
 */
class Jornada extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jornada';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dia_inicio, dia_termino', 'required'),
			array('nombre, h_entrada1, h_salida1, h_entrada2, h_salida2, dia_inicio, dia_termino', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_jornada, nombre, h_entrada1, h_salida1, h_entrada2, h_salida2, dia_inicio, dia_termino', 'safe', 'on'=>'search'),
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
			'contratos' => array(self::HAS_MANY, 'Contrato', 'jornada_id_jornada'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_jornada' => 'Id Jornada',
			'nombre' => 'Nombre',
			'h_entrada1' => 'H Entrada1',
			'h_salida1' => 'H Salida1',
			'h_entrada2' => 'H Entrada2',
			'h_salida2' => 'H Salida2',
			'dia_inicio' => 'Dia Inicio',
			'dia_termino' => 'Dia Termino',
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

		$criteria->compare('id_jornada',$this->id_jornada);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('h_entrada1',$this->h_entrada1,true);
		$criteria->compare('h_salida1',$this->h_salida1,true);
		$criteria->compare('h_entrada2',$this->h_entrada2,true);
		$criteria->compare('h_salida2',$this->h_salida2,true);
		$criteria->compare('dia_inicio',$this->dia_inicio,true);
		$criteria->compare('dia_termino',$this->dia_termino,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jornada the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function calculo($id)
	{
		$result = array();
		$modelin = Jornada::model()->findByPk($id);
		if($id == 1 || $id == '1'){
			$diferencia = 30;
			$horario = $modelin->h_entrada1.' a '.$modelin->h_salida1;
			$dias = $modelin->dia_inicio.' a '.$modelin->dia_termino;
			$d1 = '...';
			$d2 = '...';
		}
		else if ($id == 2 || $id == '2'){
			$diferencia = 30;
			$horario = $modelin->h_entrada2.' a '.$modelin->h_salida2;
			$dias = $modelin->dia_inicio.' a '.$modelin->dia_termino;
			$d1 = '...';
			$d2 = '...';
		}
		else if ($id == 3 || $id == '3'){
			$diferencia = 40;
			$horario = $modelin->h_entrada1.' a '.$modelin->h_salida1.' y de '.$modelin->h_entrada2.' a '.$modelin->h_salida2;
			$dias = $modelin->dia_inicio.' a '.$modelin->dia_termino;
			$d1 = '2 horas';
			$d2 = $modelin->h_salida1.' a '.$modelin->h_entrada2;
		}

		$result[] = array('horas'=>$diferencia,'horario'=>$horario,'dias'=>$dias,'descanso'=>$d1,'desc_hora'=>$d2);
		return $result;
	}

	/*
	$diferencia = resta($modelin->h_entrada1, $modelin->h_salida1);
	public function resta($inicio, $fin)
	{
		$dif=date("H:i:s", strtotime("00:00:00") + strtotime($fin) - strtotime($inicio) );
		return $dif;
	}*/
}
