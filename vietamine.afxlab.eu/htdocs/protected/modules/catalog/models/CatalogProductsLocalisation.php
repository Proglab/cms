<?php

/**
 * This is the model class for table "catalog_products_localisation".
 *
 * The followings are the available columns in table 'catalog_products_localisation':
 * @property integer $id
 * @property integer $catalog_products_id
 * @property string $label
 * @property string $address
 * @property string $address2
 * @property string $zip
 * @property string $city
 * @property string $country
 *
 * The followings are the available model relations:
 * @property CatalogProducts $catalogProducts
 */
class CatalogProductsLocalisation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'catalog_products_localisation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('catalog_products_id', 'required'),
			array('catalog_products_id', 'numerical', 'integerOnly'=>true),
			array('label, zip, city', 'length', 'max'=>45),
			array('address, address2', 'length', 'max'=>100),
			array('country', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, catalog_products_id, label, address, address2, zip, city, country', 'safe', 'on'=>'search'),
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
			'label' => 'Label',
			'address' => 'Address',
			'address2' => 'Address2',
			'zip' => 'Zip',
			'city' => 'City',
			'country' => 'Country',
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
		$criteria->compare('label',$this->label,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('country',$this->country,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CatalogProductsLocalisation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
