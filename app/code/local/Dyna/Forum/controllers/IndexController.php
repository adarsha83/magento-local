<?php
class Dyna_Forum_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/forum?id=15 
    	 *  or
    	 * http://site.com/forum/id/15 	
    	 */
    	/* 
		$forum_id = $this->getRequest()->getParam('id');

  		if($forum_id != null && $forum_id != '')	{
			$forum = Mage::getModel('forum/forum')->load($forum_id)->getData();
		} else {
			$forum = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($forum == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$forumTable = $resource->getTableName('forum');
			
			$select = $read->select()
			   ->from($forumTable,array('forum_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$forum = $read->fetchRow($select);
		}
		Mage::register('forum', $forum);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}