<?php

/**
 * This is the model class for table "catalog_products_formula".
 *
 * The followings are the available columns in table 'catalog_products_formula':
 * @property integer $id
 * @property integer $catalog_products_id
 * @property string $formula_title
 * @property string $formula_price
 * @property integer $formula_discount_amount
 * @property integer $maximum_age
 * @property integer $minimum_age
 *
 * The followings are the available model relations:
 * @property CatalogProducts $catalogProducts
 */
class CatalogProductsFormula extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'catalog_products_formula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('catalog_products_id, formula_title, formula_price', 'required'),
			array('catalog_products_id, formula_discount_amount, maximum_age, minimum_age', 'numerical', 'integerOnly'=>true),
			array('formula_title', 'length', 'max'=>100),
			array('formula_price', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, catalog_products_id, formula_title, formula_price, formula_discount_amount, maximum_age, minimum_age', 'safe', 'on'=>'search'),
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
			'product' => array(self::HAS_ONE, 'CatalogProducts', 'catalog_products_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'catalog_products_id' => 'Catalog Products',
			'formula_title' => 'Formula Title',
			'formula_price' => 'Formula Price',
			'formula_discount_amount' => 'Formula Discount Amount',
			'maximum_age' => 'Maximum Age',
			'minimum_age' => 'Minimum Age',
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
		$criteria->compare('catalog_products_id',$this->catalog_products_id);
		$criteria->compare('formula_title',$this->formula_title,true);
		$criteria->compare('formula_price',$this->formula_price,true);
		$criteria->compare('formula_discount_amount',$this->formula_discount_amount);
		$criteria->compare('maximum_age',$this->maximum_age);
		$criteria->compare('minimum_age',$this->minimum_age);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CatalogProductsFormula the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
