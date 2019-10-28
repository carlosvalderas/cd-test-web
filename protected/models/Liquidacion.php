<?php

/**
 * This is the model class for table "liquidacion".
 *
 * The followings are the available columns in table 'liquidacion':
 * @property integer $id
 * @property integer $mes
 * @property integer $agno
 * @property integer $remuneracion_id_remuneracion
 * @property integer $dias_descuento
 * @property integer $sueldo_liquido
 * @property integer $descuento_afp
 * @property integer $descuento_apv
 * @property integer $descuento_cesante
 * @property integer $descuento_isapre
 * @property integer $descuento_fonasa
 * @property integer $descuento_imp_renta
 * @property double $horas_extra
 *
 * The followings are the available model relations:
 * @property Remuneracion $remuneracionIdRemuneracion
 */
class Liquidacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'liquidacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mes, agno, remuneracion_id_remuneracion, dias_descuento, sueldo_liquido', 'required'),
			array('mes, agno, remuneracion_id_remuneracion, dias_descuento, sueldo_liquido, descuento_afp, descuento_apv, descuento_cesante, descuento_isapre, descuento_fonasa, descuento_imp_renta', 'numerical', 'integerOnly'=>true),
			array('horas_extra', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, mes, agno, remuneracion_id_remuneracion, dias_descuento, sueldo_liquido, descuento_afp, descuento_apv, descuento_cesante, descuento_isapre, descuento_fonasa, descuento_imp_renta', 'safe', 'on'=>'search'),
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
			'mes' => 'Mes',
			'agno' => 'Agno',
			'remuneracion_id_remuneracion' => 'Remuneracion Id Remuneracion',
			'dias_descuento' => 'Dias Descuento',
			'sueldo_liquido' => 'Sueldo Liquido',
			'descuento_afp' => 'Descuento Afp',
			'descuento_apv' => 'Descuento Apv',
			'descuento_cesante' => 'Descuento Cesante',
			'descuento_isapre' => 'Descuento Isapre',
			'descuento_fonasa' => 'Descuento Fonasa',
			'descuento_imp_renta' => 'Descuento Imp Renta',
			'horas_extra' => 'Horas Extra',
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
		$criteria->compare('mes',$this->mes);
		$criteria->compare('agno',$this->agno);
		$criteria->compare('remuneracion_id_remuneracion',$this->remuneracion_id_remuneracion);
		$criteria->compare('dias_descuento',$this->dias_descuento);
		$criteria->compare('sueldo_liquido',$this->sueldo_liquido);
		$criteria->compare('descuento_afp',$this->descuento_afp);
		$criteria->compare('descuento_apv',$this->descuento_apv);
		$criteria->compare('descuento_cesante',$this->descuento_cesante);
		$criteria->compare('descuento_isapre',$this->descuento_isapre);
		$criteria->compare('descuento_fonasa',$this->descuento_fonasa);
		$criteria->compare('descuento_imp_renta',$this->descuento_imp_renta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function searchPorUsuario($userid)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
                $remune=  Remuneracion::model()->findByAttributes(array('usuario_id_usuario'=>$userid));

		$criteria->compare('id',$this->id);
		$criteria->compare('mes',$this->mes);
		$criteria->compare('agno',$this->agno);
                if(!is_null($remune))
                {
                    $criteria->compare('remuneracion_id_remuneracion',$remune->id_remuneracion);
                }
                else
                    $criteria->addcondition('remuneracion_id_remuneracion IS NULL');
		$criteria->compare('dias_descuento',$this->dias_descuento);
		$criteria->compare('sueldo_liquido',$this->sueldo_liquido);
		$criteria->compare('descuento_afp',$this->descuento_afp);
		$criteria->compare('descuento_apv',$this->descuento_apv);
		$criteria->compare('descuento_cesante',$this->descuento_cesante);
		$criteria->compare('descuento_isapre',$this->descuento_isapre);
		$criteria->compare('descuento_fonasa',$this->descuento_fonasa);
		$criteria->compare('descuento_imp_renta',$this->descuento_imp_renta);
		$criteria->compare('horas_extra',$this->horas_extra);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Liquidacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function sueldo($userid)
        {
            $remu=  Remuneracion::model()->findByAttributes(array('usuario_id_usuario'=>$userid));
            if(!is_null($remu))
                return $remu->sueldo_bruto;
            else
                return false;
        }
        public function nombremes()
        {
            $mes=$this->mes;
            $mess='';
            if($mes == 1)
                $mess='Enero';
            elseif($mes == 2)
                $mess='Febrero';
            elseif($mes == 3)
                $mess='Marzo';
            elseif($mes == 4)
                $mess='Abril';
            elseif($mes == 5)
                $mess='Mayo';
            elseif($mes == 6)
                $mess='Junio';
            elseif($mes == 7)
                $mess='Julio';
            elseif($mes == 8)
                $mess='Agosto';
            elseif($mes == 9)
                $mess='Septiembre';
            elseif($mes == 10)
                $mess='Octubre';
            elseif($mes == 11)
                $mess='Noviembre';
            elseif($mes == 12)
                $mess='Diciembre';
            return $mess;
        }
}

