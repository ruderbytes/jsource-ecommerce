<?php

/**
 * This is the model class for table "category_product".
 *
 * The followings are the available columns in table 'category_product':
 * @property integer $category_id
 * @property string $cat_name
 * @property integer $cat_parent_id
 * @property integer $position
 * @property string $is_shown
 */
class CategoryProduct extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CategoryProduct the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'category_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cat_name, cat_parent_id, position, is_shown', 'required'),
			array('cat_parent_id, position', 'numerical', 'integerOnly'=>true),
			array('cat_name', 'length', 'max'=>225),
			array('is_shown', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('category_id, cat_name, cat_parent_id, position, is_shown', 'safe', 'on'=>'search'),
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
                    'varproducts'=>array(self::HAS_MANY,'Products','category_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'category_id' => 'Category',
			'cat_name' => 'Cat Name',
			'cat_parent_id' => 'Cat Parent',
			'position' => 'Position',
			'is_shown' => 'Is Shown',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('cat_name',$this->cat_name,true);
		$criteria->compare('cat_parent_id',$this->cat_parent_id);
		$criteria->compare('position',$this->position);
		$criteria->compare('is_shown',$this->is_shown,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}