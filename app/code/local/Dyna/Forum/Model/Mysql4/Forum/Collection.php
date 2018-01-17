<?php

class Dyna_Forum_Model_Mysql4_Forum_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('forum/forum');
    }
}