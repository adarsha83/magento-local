<?php

$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$installer->run("
INSERT INTO {$this->getTable('forum')} (forum_id, title, filename, content, status) VALUES (1,'Magento Course','forum.html', 'Sample Magento Forum', 1);
");

$installer->endSetup();
