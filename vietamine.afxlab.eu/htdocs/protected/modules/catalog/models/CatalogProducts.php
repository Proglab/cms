<?php

/**
 * This is the model class for table "catalog_products".
 *
 * The followings are the available columns in table 'catalog_products':
 * @property integer $id
 * @property integer $catalog_cat_id
 * @property string $title
 * @property string $description_short
 * @property string $description
 * @property string $diffusion_start_date
 * @property string $diffusion_end_date
 * @property integer $stock
 * @property string $seo_title
 * @property string $seo_description
 * @property string $active
 *
 * The followings are the available model relations:
 * @property CatalogCat $catalogCat
 * @property CatalogProductsDates[] $catalogProductsDates
 * @property CatalogProductsFormula[] $catalogProductsFormulas
 * @property CatalogProductsLocalisation[] $catalogProductsLocalisations
 */
class CatalogProducts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'catalog_products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('catalog_cat_id, title, description_short, diffusion_start_date', 'required'),
			array('catalog_cat_id, stock', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>100),
			array('seo_title', 'length', 'max'=>60),
			array('seo_description', 'length', 'max'=>160),
			array('active', 'length', 'max'=>1),
			array('description, diffusion_end_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, catalog_cat_id, title, description_short, description, diffusion_start_date, diffusion_end_date, stock, seo_title, seo_description, active', 'safe', 'on'=>'search'),
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
			'category' => array(self::HAS_ONE, 'CatalogCat', 'catalog_cat_id'),
			'dates' => array(self::HAS_ONE, 'CatalogProductsDates', 'catalog_products_id'),
			'formula' => array(self::HAS_MANY, 'CatalogProductsFormula', 'catalog_products_id'),
			'localisation' => array(self::HAS_ONE, 'CatalogProductsLocalisation', 'catalog_products_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'catalog_cat_id' => 'Catalog Cat',
			'title' => 'Title',
			'description_short' => 'Description Short',
			'description' => 'Description',
			'diffusion_start_date' => 'Diffusion Start Date',
			'diffusion_end_date' => 'Diffusion End Date',
			'stock' => 'Stock',
			'seo_title' => 'Seo Title',
			'seo_description' => 'Seo Description',
			'active' => 'Active',
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
		$criteria->compare('catalog_cat_id',$this->catalog_cat_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description_short',$this->description_short,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('diffusion_start_date',$this->diffusion_start_date,true);
		$criteria->compare('diffusion_end_date',$this->diffusion_end_date,true);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_description',$this->seo_description,true);
		$criteria->compare('active',$this->active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CatalogProducts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
