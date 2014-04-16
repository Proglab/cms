<?php
Yii::import('zii.widgets.CPortlet');

class StaticContent extends CPortlet
{
    public $directory;
    public $content;
    public $page;
    
    public function init()
    {
        //Vérification des droits
        
    }
    
    public function run()
    {
        $this->render('webroot.themes.vietamine-btp3.views.widgets.'.$this->directory.'.'.$this->content, null);
    }
}

?>
