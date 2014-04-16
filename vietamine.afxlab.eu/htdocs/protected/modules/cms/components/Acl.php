<?php
class Acl extends CApplicationComponent
{
    protected $_user = null;
    protected $_resources = null;
    
    public function checkRight($resource)
    {
        if ($resource == 'Guest')
        {
            return true;
        }
        
        if (empty($resource))
        {
            $resource = "Guest";
        }
        $action = 'is'.$resource;
        
        return Yii::app()->user->$action();
    }
}