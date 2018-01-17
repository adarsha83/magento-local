<?php
class Dyna_Forum_Block_Forum extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getForum()     
     { 
        if (!$this->hasData('forum')) {
            $this->setData('forum', Mage::registry('forum'));
        }
        return $this->getData('forum');
        
    }
}