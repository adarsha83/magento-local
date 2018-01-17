<?php

class Dyna_Forum_Model_Mysql4_Forum extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the forum_id refers to the key field in your database table.
        $this->_init('forum/forum', 'forum_id');
    }
}