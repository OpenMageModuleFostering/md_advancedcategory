<?php

$installer = $this;
$installer->startSetup();
 
$entityTypeId     = $installer->getEntityTypeId('catalog_category');
$attributeSetId   = $installer->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $installer->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);
 
$installer->addAttribute('catalog_category', 'footer_description',  array(
    'type'     => 'text',
    'label'    => 'Footer Description',
    'input'    => 'textarea',
    'global'   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'           => true,
    'required'          => false,
	'wysiwyg_enabled'  	=> true,
    'user_defined'      => false,
    'default'           => ''
));
 
$installer->addAttributeToGroup(
    $entityTypeId,
    $attributeSetId,
    $attributeGroupId,
    'footer_description',
    '3'                    //last Magento's attribute position in General tab is 10
);
 
$attributeId = $installer->getAttributeId($entityTypeId, 'footer_description');
 
// $installer->run("
// INSERT INTO `{$installer->getTable('catalog_category_entity_int')}`
// (`entity_type_id`, `attribute_id`, `entity_id`, `value`)
    // SELECT '{$entityTypeId}', '{$attributeId}', `entity_id`, ''
        // FROM `{$installer->getTable('catalog_category_entity')}`;
// ");
 
// this will set data of your custom attribute for root category
Mage::getModel('catalog/category')
    ->load(1)
    ->setImportedCatId(0)
    ->setInitialSetupFlag(true)
    ->save();
 
// this will set data of your custom attribute for default category
Mage::getModel('catalog/category')
    ->load(2)
    ->setImportedCatId(0)
    ->setInitialSetupFlag(true)
    ->save();
	

$entityTypeId     = $installer->getEntityTypeId('catalog_category');
$attributeSetId   = $installer->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $installer->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);
 
$installer->addAttribute('catalog_category', 'footer_title',  array(
    'type'     => 'text',
    'label'    => 'Footer Title',
    'input'    => 'textarea',
    'global'   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'           => true,
    'required'          => false,
	'wysiwyg_enabled'  	=> true,
    'user_defined'      => false,
    'default'           => ''
));
 
$installer->addAttributeToGroup(
    $entityTypeId,
    $attributeSetId,
    $attributeGroupId,
    'footer_title',
    '4'                    //last Magento's attribute position in General tab is 10
);
 
$attributeId = $installer->getAttributeId($entityTypeId, 'footer_title');
 
// $installer->run("
// INSERT INTO `{$installer->getTable('catalog_category_entity_int')}`
// (`entity_type_id`, `attribute_id`, `entity_id`, `value`)
    // SELECT '{$entityTypeId}', '{$attributeId}', `entity_id`, ''
        // FROM `{$installer->getTable('catalog_category_entity')}`;
// ");
 
// this will set data of your custom attribute for root category
Mage::getModel('catalog/category')
    ->load(1)
    ->setImportedCatId(0)
    ->setInitialSetupFlag(true)
    ->save();
 
// this will set data of your custom attribute for default category
Mage::getModel('catalog/category')
    ->load(2)
    ->setImportedCatId(0)
    ->setInitialSetupFlag(true)
    ->save();
	
$entityTypeId     = $installer->getEntityTypeId('catalog_category');
$attributeSetId   = $installer->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $installer->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);
 
$installer->addAttribute('catalog_category', 'video_link',  array(
    'type'     => 'text',
    'label'    => 'Video Link',
    'input'    => 'textarea',
    'global'   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'           => true,
    'required'          => false,
	'wysiwyg_enabled'  	=> true,	
    'user_defined'      => false,
    'default'           => ''
));
 
$installer->addAttributeToGroup(
    $entityTypeId,
    $attributeSetId,
    $attributeGroupId,
    'video_link',
    '5'                    //last Magento's attribute position in General tab is 10
);
 
$attributeId = $installer->getAttributeId($entityTypeId, 'video_link');
 
// $installer->run("
// INSERT INTO `{$installer->getTable('catalog_category_entity_int')}`
// (`entity_type_id`, `attribute_id`, `entity_id`, `value`)
    // SELECT '{$entityTypeId}', '{$attributeId}', `entity_id`, ''
        // FROM `{$installer->getTable('catalog_category_entity')}`;
// ");
 
// this will set data of your custom attribute for root category
Mage::getModel('catalog/category')
    ->load(1)
    ->setImportedCatId(0)
    ->setInitialSetupFlag(true)
    ->save();
 
// this will set data of your custom attribute for default category
Mage::getModel('catalog/category')
    ->load(2)
    ->setImportedCatId(0)
    ->setInitialSetupFlag(true)
    ->save();

	
$installer->endSetup();
?>