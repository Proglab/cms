<?php
Yii::import('zii.widgets.CPortlet');

class Widget extends CPortlet
{
    public $directory;
    public $content;
    public $page;
    public $widget;
    protected $_params;
    
    public function init()
    {
        
    }
    
    public function run()
    {
        $this->render('webroot.themes.'.Yii::app()->theme->name.'.views.widgets.'.$this->directory.'.'.$this->content, $this->_params);
    }
}

?>
