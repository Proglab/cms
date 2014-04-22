<?php
class ProductWidget extends Widget
{
    public function init()
    {
        $this->_params = array('product' => CatalogProducts::model()->with('dates', 'formula', 'localisation')->findByPk($_GET['id']));
    }
}
