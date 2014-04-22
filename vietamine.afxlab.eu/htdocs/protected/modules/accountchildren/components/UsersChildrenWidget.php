<?php
class UsersChildrenWidget extends Widget
{
    public function init()
    {
        $criteria=new CDbCriteria;
        $criteria->condition='users_id=:users_id';
        $criteria->params=array(':users_id'=>Yii::app()->user->id);
        $this->_params = array('children_user' => UsersChildren::model()->findAll($criteria));
    }
}
?>
