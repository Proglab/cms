<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $lastname
 * @property string $firstname
 * @property string $role
 * @property string $email
 * @property string $pass
 * @property string $ip
 * @property string $session_id
 * @property string $last_connected
 * @property string $creation_date
 * @property string $active
 *
 * The followings are the available model relations:
 * @property UsersContact[] $usersContacts
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
			array('lastname, firstname, role, email, pass, creation_date', 'required'),
			array('lastname, firstname', 'length', 'max'=>50),
			array('role, session_id', 'length', 'max'=>30),
			array('email', 'length', 'max'=>150),
			array('pass', 'length', 'max'=>32),
			array('ip', 'length', 'max'=>15),
			array('active', 'length', 'max'=>1),
			array('last_connected', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, lastname, firstname, role, email, pass, ip, session_id, last_connected, creation_date, active', 'safe', 'on'=>'search'),
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
			'contact' => array(self::HAS_ONE, 'UsersContact', 'users_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'lastname' => 'Lastname',
			'firstname' => 'Firstname',
			'role' => 'Role',
			'email' => 'Email',
			'pass' => 'Pass',
			'ip' => 'Ip',
			'session_id' => 'Session',
			'last_connected' => 'Last Connected',
			'creation_date' => 'Creation Date',
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
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('session_id',$this->session_id,true);
		$criteria->compare('last_connected',$this->last_connected,true);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('active',$this->active,true);

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
