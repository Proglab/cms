<?php

class WebUser extends CWebUser {

    // Store model to not repeat query.
    private $_model;
    
    // Return first name.
    // access it by Yii::app()->user->first_name
    function getFirstName() {
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->firstname;
    }

    function getLastname() {
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->lastname;
    }
    
    function getFullName() {
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->firstname.' '.$user->name;
    }

    function getRole() {
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->role;
    }

    function getEmail() {
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->email;
    }

    function getTel() {
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->contact->tel;
    }
    
    function getMobile() {
        $user = $this->loadUser(Yii::app()->user->id);
        return $user->contact->mobile;
    }

    // This is a function that checks the field 'role'
    // in the User model to be equal to constant defined in our User class
    // that means it's admin
    // access it by Yii::app()->user->isAdmin()
    function isAdmin() {
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user !== null)
        {
            return $user->role == Users::ROLE_ADMIN || $user->role == Users::ROLE_SUPERADMIN;
        }
        else
            return false;
    }
    
    function isGuest() 
    {
            return true;
    }
    
    function isGuestonly() 
    {
        if (Yii::app()->user->id)
            return false;
        return true;
    }
    
    function isConnected() 
    {
            if (Yii::app()->user->id)
            {
                return true;
            }
            else
            {
                return false;
            }
    }
    
     function isSuperAdmin(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user!==null)
        return $user->role == Users::ROLE_SUPERADMIN;
        else return false;
    }
    
    function isRegistered(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user!==null)
        return $user->role == Users::ROLE_REGISTERED || $user->role == Users::ROLE_ADMIN|| $user->role == Users::ROLE_SUPERADMIN;
        else return false;
    }

    // Load user model.
    protected function loadUser($id = null) {
        if ($this->_model === null) {
            if ($id !== null)
                $this->_model = Users::model()->findByPk($id)->with('user_contact');
        }
        return $this->_model;
    }

}