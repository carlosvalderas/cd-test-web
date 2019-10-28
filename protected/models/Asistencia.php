<?php

/**
 * This is the model class for table "asistencia".
 *
 * The followings are the available columns in table 'asistencia':
 * @property integer $idAsistencia
 * @property integer $usuario_id_usuario
 * @property string $fecha
 * @property string $hora
 * @property integer $estado_as_idestado_as
 *
 * The followings are the available model relations:
 * @property EstadoAs $estadoAsIdestadoAs
 * @property Usuario $usuarioIdUsuario
 */
class Asistencia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'asistencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario_id_usuario, fecha, hora, estado_as_idestado_as', 'required'),
			array('usuario_id_usuario, estado_as_idestado_as', 'numerical', 'integerOnly'=>true),
			array('fecha, hora', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAsistencia, usuario_id_usuario, fecha, hora, estado_as_idestado_as', 'safe', 'on'=>'search'),
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
			'estadoAsIdestadoAs' => array(self::BELONGS_TO, 'EstadoAs', 'estado_as_idestado_as'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAsistencia' => 'Id Asistencia',
			'usuario_id_usuario' => 'Usuario Id Usuario',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'estado_as_idestado_as' => 'Estado As Idestado As',
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

		$criteria->compare('idAsistencia',$this->idAsistencia);
		$criteria->compare('usuario_id_usuario',$this->usuario_id_usuario);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('estado_as_idestado_as',$this->estado_as_idestado_as);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array('pageSize'=>10),
		));
	}
        public function searchPorUsuario($userid)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idAsistencia',$this->idAsistencia);
		//$criteria->compare('usuario_id_usuario',$this->usuario_id_usuario);
                $criteria->compare('usuario_id_usuario',$userid);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->order='fecha DESC';
		$criteria->compare('estado_as_idestado_as',$this->estado_as_idestado_as);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array('pageSize'=>10),
		));
	}

        
    public function searchByDate($publishDate, $seccion)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
		$criteria=new CDbCriteria;
		$hoydia = date('Y-m-d');
		$criteria->with = array('usuarioIdUsuario');
		if($seccion != 4 || $seccion != '4')
			$criteria->compare('usuarioIdUsuario.seccion_idseccion', $seccion);
                        $criteria->compare('idAsistencia',$this->idAsistencia);
                        $criteria->compare('usuario_id_usuario',$this->usuario_id_usuario);
		if($publishDate != "")
		{
                    $criteria->compare('fecha',$publishDate);
        }
                $criteria->order='fecha DESC';
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('estado_as_idestado_as',$this->estado_as_idestado_as);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array('pageSize'=>10),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Asistencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function estado1() 
    {
    // aquí tienes todas las propiedades del model, mediante $this, porque le llega el $data de la fila
    $status = $this->estado_as_idestado_as; // por ejemplo, es el valor de esa fila
    $xxx = '';
    if($status == 1){
    $xxx = 'Entrada';}
    if($status == 2){
    $xxx = 'Ausente';}
    if($status == 3){
    $xxx = 'Entrada(Atraso)';}
    if($status == 4)
    $xxx='Salida';
            
    return $xxx;
    }
    public function nombre_completo()
    {
    	$nombre = $this->usuarioIdUsuario->Nombres.' '.$this->usuarioIdUsuario->apellido_p;
    	return $nombre;
    }
    public function changedate()
    {
    	$ate = date('d-m-Y',strtotime($this->fecha));
    	return $ate;
    }
}
