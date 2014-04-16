<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $company
 * @property string $name
 * @property string $firstname
 * @property string $role
 * @property string $email
 * @property string $pass
 * @property string $ip
 * @property string $session_id
 * @property string $last_connected
 * @property string $creation_date
 */
class Users extends CActiveRecord
{
    
        const ROLE_ADMIN = 'admin';
        const ROLE_SUPERADMIN = 'superadmin';
        const ROLE_REGISTERED = 'client';
        
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, role, email, pass, creation_date', 'required'),
			array('company', 'length', 'max'=>45),
			array('name, firstname', 'length', 'max'=>50),
			array('role, session_id', 'length', 'max'=>30),
			array('email', 'length', 'max'=>150),
			array('pass', 'length', 'max'=>32),
			array('ip', 'length', 'max'=>15),
			array('last_connected', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, company, name, firstname, role, email, pass, ip, session_id, last_connected, creation_date', 'safe', 'on'=>'search'),
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
			'company' => 'Company',
			'name' => 'Name',
			'firstname' => 'Firstname',
			'role' => 'Role',
			'email' => 'Email',
			'pass' => 'Pass',
			'ip' => 'Ip',
			'session_id' => 'Session',
			'last_connected' => 'Last Connected',
			'creation_date' => 'Creation Date',
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
		$criteria->compare('company',$this->company,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('session_id',$this->session_id,true);
		$criteria->compare('last_connected',$this->last_connected,true);
		$criteria->compare('creation_date',$this->creation_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
