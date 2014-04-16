<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
    private $_username;
    
    public function getName()
    {
        return $this->_username;
    }
    
    public function getId()
    {
        return $this->_id;
    }
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		 $user= Users::model()->find('LOWER(email)=?', array(strtolower($this->username)));
                if($user === null)
                {
                    $this->errorCode= self::ERROR_UNKNOWN_IDENTITY;
                }
                elseif($user->pass !== md5($this->password))
                //elseif($user->pass  !== $this->password)
                {
                    $this->errorCode= self::ERROR_PASSWORD_INVALID;
                }
                else
                {
                    $this->_id = $user->id;
                    $this->_username = $user->email;
                    $user->last_connected=new CDbExpression("NOW()");
                    $user->session_id=  CHttpSession::getSessionID();
                    $user->ip=$_SERVER['REMOTE_ADDR'];
                    $user->save();
                    $this->errorCode= self::ERROR_NONE;
                }
                return !$this->errorCode;
	}
        
        
        
}