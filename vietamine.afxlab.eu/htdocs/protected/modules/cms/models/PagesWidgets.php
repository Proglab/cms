<?php

/**
 * This is the model class for table "pages_widgets".
 *
 * The followings are the available columns in table 'pages_widgets':
 * @property integer $id
 * @property integer $pages_id
 * @property integer $widgets_id
 * @property integer $position
 * @property string $spot
 *
 * The followings are the available model relations:
 * @property Pages $pages
 * @property Widgets $widgets
 */
class PagesWidgets extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pages_widgets';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pages_id, widgets_id, position', 'required'),
			array('pages_id, widgets_id, position', 'numerical', 'integerOnly'=>true),
			array('spot', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pages_id, widgets_id, position, spot', 'safe', 'on'=>'search'),
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
			'pages' => array(self::BELONGS_TO, 'Pages', 'pages_id'),
			'widgets' => array(self::BELONGS_TO, 'Widgets', 'widgets_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pages_id' => 'Pages',
			'widgets_id' => 'Widgets',
			'position' => 'Position',
			'spot' => 'Spot',
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
		$criteria->compare('pages_id',$this->pages_id);
		$criteria->compare('widgets_id',$this->widgets_id);
		$criteria->compare('position',$this->position);
		$criteria->compare('spot',$this->spot,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PagesWidgets the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
