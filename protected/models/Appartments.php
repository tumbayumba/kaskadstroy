<?php

/**
 * This is the model class for table "tbl_appartments".
 *
 * The followings are the available columns in table 'tbl_appartments':
 * @property integer $id
 * @property integer $type_id
 * @property integer $house_id
 * @property string $square
 * @property string $price2square
 * @property string $price
 * @property string $image
 * @property string $action
 * @property integer $is_public
 * @property string $description
 */
class Appartments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_appartments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type_id', 'required'),
			array('type_id, house_id, is_public', 'numerical', 'integerOnly'=>true),
			array('square, price2square, price', 'length', 'max'=>128),
			array('image', 'length', 'max'=>255),
			array('action, description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type_id, house_id, square, price2square, price, image, action, is_public, description', 'safe', 'on'=>'search'),
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
			'type_id' => 'Тип помещения',
			'house_id' => 'Дом',
			'square' => 'Площадь (м2)',
			'price2square' => 'Цена за м2.(руб.)',
			'price' => 'Цена (руб.)',
			'image' => 'Планировка',
			'action' => 'Акция',
			'is_public' => 'Разместить',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('house_id',$this->house_id);
		$criteria->compare('square',$this->square,true);
		$criteria->compare('price2square',$this->price2square,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('action',$this->action,true);
		$criteria->compare('is_public',$this->is_public);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function mySearch($house_id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition = 'house_id='.$house_id;

		$criteria->compare('id',$this->id);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('house_id',$this->house_id);
		$criteria->compare('square',$this->square,true);
		$criteria->compare('price2square',$this->price2square,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('action',$this->action,true);
		$criteria->compare('is_public',$this->is_public);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function summarySearch($complex_id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
		$complex = Complex::model()->find(array('condition'=>'id=:cid','params'=>array(':cid'=>$complex_id)));
		$house = House::model()->findAll(array('condition'=>'complex_id=:cid','params'=>array(':cid'=>$complex_id)));
		foreach($house as $h){
			$house_id_arr[] = $h->id; 
		}
		$string = implode(',',$house_id_arr);
		$criteria=new CDbCriteria;
		$criteria->condition = 'is_public=1 AND house_id IN ('.$string.')';

		$criteria->compare('id',$this->id);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('house_id',$this->house_id);
		$criteria->compare('square',$this->square,true);
		$criteria->compare('price2square',$this->price2square,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('action',$this->action,true);
		$criteria->compare('is_public',$this->is_public);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Appartments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
