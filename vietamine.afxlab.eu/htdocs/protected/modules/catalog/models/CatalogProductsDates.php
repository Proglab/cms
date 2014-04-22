<?php

/**
 * This is the model class for table "catalog_products_dates".
 *
 * The followings are the available columns in table 'catalog_products_dates':
 * @property integer $id
 * @property integer $catalog_products_id
 * @property string $start_date
 * @property string $end_date
 * @property string $start_hour
 * @property string $end_hour
 *
 * The followings are the available model relations:
 * @property CatalogProducts $catalogProducts
 */
class CatalogProductsDates extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'catalog_products_dates';
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
			array('start_date, end_date, start_hour, end_hour', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, catalog_products_id, start_date, end_date, start_hour, end_hour', 'safe', 'on'=>'search'),
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
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'start_hour' => 'Start Hour',
			'end_hour' => 'End Hour',
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
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('start_hour',$this->start_hour,true);
		$criteria->compare('end_hour',$this->end_hour,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CatalogProductsDates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
