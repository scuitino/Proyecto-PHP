
<?php

/**
 * This is the model class for table "Inmueble".
 *
 * The followings are the available columns in table 'Inmueble':
 * @property integer $idInmueble
 * @property string $tituloInmueble
 * @property string $descripcionInmueble
 * @property integer $precioInmueble
 * @property integer $destacadoInmueble
 * @property integer $estadoInmueble
 * @property integer $habitacionesInmueble
 * @property integer $baniosInmuebles
 * @property integer $garageInmueble
 * @property integer $cocinaInmueble
 * @property integer $superficieInmueble
 * @property integer $Barrio_idBarrio
 * @property integer $Usuario_id
 *
 * The followings are the available model relations:
 * @property User $usuario
 * @property Barrio $barrioIdBarrio
 */
class Inmueble extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Inmueble';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Barrio_idBarrio, Usuario_id', 'required'),
			array('precioInmueble, destacadoInmueble, estadoInmueble, habitacionesInmueble, baniosInmuebles, garageInmueble, cocinaInmueble, superficieInmueble, Barrio_idBarrio, Usuario_id', 'numerical', 'integerOnly'=>true),
			array('tituloInmueble, descripcionInmueble', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idInmueble, tituloInmueble, descripcionInmueble, precioInmueble, destacadoInmueble, estadoInmueble, habitacionesInmueble, baniosInmuebles, garageInmueble, cocinaInmueble, superficieInmueble, Barrio_idBarrio, Usuario_id', 'safe', 'on'=>'search'),
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
			'usuario' => array(self::BELONGS_TO, 'User', 'Usuario_id'),
			'barrios' => array(self::BELONGS_TO, 'Barrio', 'Barrio_idBarrio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idInmueble' => 'Id Inmueble',
			'tituloInmueble' => 'Titulo Inmueble',
			'descripcionInmueble' => 'Descripcion Inmueble',
			'precioInmueble' => 'Precio Inmueble',
			'destacadoInmueble' => 'Destacado Inmueble',
			'estadoInmueble' => 'Estado Inmueble',
			'habitacionesInmueble' => 'Habitaciones Inmueble',
			'baniosInmuebles' => 'Banios Inmuebles',
			'garageInmueble' => 'Garage Inmueble',
			'cocinaInmueble' => 'Cocina Inmueble',
			'superficieInmueble' => 'Superficie Inmueble',
			'Barrio_idBarrio' => 'Barrio Id Barrio',
			'Usuario_id' => 'Usuario',
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

		$criteria->compare('idInmueble',$this->idInmueble);
		$criteria->compare('tituloInmueble',$this->tituloInmueble,true);
		$criteria->compare('descripcionInmueble',$this->descripcionInmueble,true);
		$criteria->compare('precioInmueble',$this->precioInmueble);
		$criteria->compare('destacadoInmueble',$this->destacadoInmueble);
		$criteria->compare('estadoInmueble',$this->estadoInmueble);
		$criteria->compare('habitacionesInmueble',$this->habitacionesInmueble);
		$criteria->compare('baniosInmuebles',$this->baniosInmuebles);
		$criteria->compare('garageInmueble',$this->garageInmueble);
		$criteria->compare('cocinaInmueble',$this->cocinaInmueble);
		$criteria->compare('superficieInmueble',$this->superficieInmueble);
		$criteria->compare('Barrio_idBarrio',$this->Barrio_idBarrio);
		$criteria->compare('Usuario_id',$this->Usuario_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inmueble the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
