<?php

/**
 * This is the model class for table "Imagen".
 *
 * The followings are the available columns in table 'Imagen':
 * @property integer $idImagen
 * @property string $urlImagen
 * @property integer $Inmueble_idInmueble
 * @property integer $portadaImagen
 *
 * The followings are the available model relations:
 * @property Inmueble $inmuebleIdInmueble
 */
class Imagen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Imagen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Inmueble_idInmueble', 'required'),
			array('Inmueble_idInmueble, portadaImagen', 'numerical', 'integerOnly'=>true),
			array('urlImagen', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idImagen, urlImagen, Inmueble_idInmueble, portadaImagen', 'safe', 'on'=>'search'),
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
			'inmuebleIdInmueble' => array(self::BELONGS_TO, 'Inmueble', 'Inmueble_idInmueble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idImagen' => 'Id Imagen',
			'urlImagen' => 'Url Imagen',
			'Inmueble_idInmueble' => 'Inmueble Id Inmueble',
			'portadaImagen' => 'Portada Imagen',
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

		$criteria->compare('idImagen',$this->idImagen);
		$criteria->compare('urlImagen',$this->urlImagen,true);
		$criteria->compare('Inmueble_idInmueble',$this->Inmueble_idInmueble);
		$criteria->compare('portadaImagen',$this->portadaImagen);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Imagen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
