<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $prod_id
 * @property string $prod_name
 * @property integer $category_id
 * @property string $descript
 * @property integer $price
 * @property double $disc
 * @property string $prod_images
 * @property integer $stock
 * @property string $is_shown
 * @property double $rating
 * @property integer $total_view
 * @property integer $position
 */
class Products extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Products the static model class
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
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prod_name, price, disc, prod_images, is_shown', 'required'),
			array('category_id, price, stock, total_view, position', 'numerical', 'integerOnly'=>true),
			array('disc, rating', 'numerical'),
			array('prod_name', 'length', 'max'=>225),
			array('prod_images', 'length', 'max'=>200),
			array('is_shown', 'length', 'max'=>1),
			array('descript', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('prod_id, prod_name, category_id, descript, price, disc, prod_images, stock, is_shown, rating, total_view, position', 'safe', 'on'=>'search'),
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
                    'varcatalog'=>array(self::BELONGS_TO,'CategoryProduct','category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'prod_id' => 'Prod',
			'prod_name' => 'Prod Name',
			'category_id' => 'Category',
			'descript' => 'Descript',
			'price' => 'Price',
			'disc' => 'Disc',
			'prod_images' => 'Prod Images',
			'stock' => 'Stock',
			'is_shown' => 'Is Shown',
			'rating' => 'Rating',
			'total_view' => 'Total View',
			'position' => 'Position',
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

		$criteria->compare('prod_id',$this->prod_id);
		$criteria->compare('prod_name',$this->prod_name,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('descript',$this->descript,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('disc',$this->disc);
		$criteria->compare('prod_images',$this->prod_images,true);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('is_shown',$this->is_shown,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('total_view',$this->total_view);
		$criteria->compare('position',$this->position);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}