<?php

/**
 * This is the model class for table "tbl_house".
 *
 * The followings are the available columns in table 'tbl_house':
 * @property string $id
 * @property string $complex_id
 * @property string $house_name
 * @property string $floorplan_image
 * @property string $description
 * @property string $image
 * @property string $status
 */
class House extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_house';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('house_name', 'required'),
			array('complex_id', 'length', 'max'=>11),
			array('house_name, floorplan_image, description, image, status', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, complex_id, house_name, floorplan_image, description, image, status', 'safe', 'on'=>'search'),
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
			'complex_id' => 'Комплекс',
			'house_name' => 'Название',
			'floorplan_image' => 'План типового этажа',
			'description' => 'Описание',
			'image' => 'Фото дома',
			'status' => 'Статус',
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
		$criteria->compare('complex_id',$this->complex_id,true);
		$criteria->compare('house_name',$this->house_name,true);
		$criteria->compare('floorplan_image',$this->floorplan_image,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function mySearch($complex_id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition = 'complex_id='.$complex_id;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('complex_id',$this->complex_id,true);
		$criteria->compare('house_name',$this->house_name,true);
		$criteria->compare('floorplan_image',$this->floorplan_image,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'house_name ASC',
			 )
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return House the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
