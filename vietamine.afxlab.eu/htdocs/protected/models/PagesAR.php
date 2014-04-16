<?php
class PagesAR extends Pages
{
    public function findByUrl($url) {
        return $this->find('url=:url',array(':url'=>$url));
    }
    
    public static function model($className=__CLASS__)
    {
            return parent::model($className);
    }
    
    public function getWidgets()
    {
        $criteria=new CDbCriteria;
        $criteria->condition='pages_id=:pages_id';
        $criteria->params=array(':pages_id'=>$this->id);
        $criteria->order ='position';
        $criteria->with = 'widgets';
        
        $pagesWidgets = PagesWidgets::model()->findAll($criteria);
        if (!empty($pagesWidgets))
        {
            $return = array();
            $i=0;
            foreach($pagesWidgets as $pagesWidget)
            {
                $return[$i]['widgets'] = $pagesWidget->widgets;
                $return[$i]['spot'] = $pagesWidget->spot;
                $i++;
            }
            return $return;
        }
        else
        {
            return array();
        }
    }
}