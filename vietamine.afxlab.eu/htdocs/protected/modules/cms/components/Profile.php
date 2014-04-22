<?php
Yii::import('zii.widgets.CPortlet');

class Profile extends CPortlet
{
    public function init()
    {
        //Vérification des droits
        
    }
    
    public function run()
    {
        $this->render('webroot.themes.'.Yii::app()->theme->getName().'.views.widgets.default.profile', array('user' => $this->datas));
    }
}

?>
