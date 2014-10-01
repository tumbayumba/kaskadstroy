<?php

/**
 * This is the model class for table "tbl_complex".
 *
 * The followings are the available columns in table 'tbl_complex':
 * @property string $id
 * @property string $complex_name
 * @property string $adress
 * @property string $driveway_image
 * @property string $image
 * @property string $description
 */
class Complex extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_complex';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('complex_name', 'required'),
			//array('image, driveway_image', 'file', 'types'=>'jpg, gif, png'),
			//array('driveway_image', 'length', 'max'=>128),
			array('adress, description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, complex_name, adress, driveway_image, image, description', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'complex_name' => 'Название комплекса',
			'adress' => 'Адресс',
			'driveway_image' => ' Схема проезда на объект',
			'image' => 'Фото',
			'description' => 'Описание',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('complex_name',$this->complex_name,true);
		$criteria->compare('adress',$this->adress,true);
		$criteria->compare('driveway_image',$this->driveway_image,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Complex the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
