<?php

/**
 * This is the model class for table "users_children".
 *
 * The followings are the available columns in table 'users_children':
 * @property integer $id
 * @property integer $users_id
 * @property string $firstname
 * @property string $lastname
 * @property string $birthdate
 * @property string $link
 * @property string $sportive_level
 */
class UsersChildren extends CActiveRecord
{
        public $primaryKey = 'id';
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_children';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('users_id, firstname, lastname, birthdate, link, sportive_level', 'required'),
			array('users_id', 'numerical', 'integerOnly'=>true),
			array('firstname, lastname, link, sportive_level', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, users_id, firstname, lastname, birthdate, link, sportive_level', 'safe', 'on'=>'search'),
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
			'users_id' => 'Users',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'birthdate' => 'Birthdate',
			'link' => 'Link',
			'sportive_level' => 'Sportive Level',
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
		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('sportive_level',$this->sportive_level,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsersChildren the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
