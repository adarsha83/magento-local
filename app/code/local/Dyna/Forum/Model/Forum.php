<?php

class Dyna_Forum_Model_Forum extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('forum/forum');
    }
}