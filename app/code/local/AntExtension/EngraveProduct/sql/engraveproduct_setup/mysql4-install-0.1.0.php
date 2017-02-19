<?php
$installer = $this;
$installer->startSetup();


$installer->addAttribute("catalog_product", "engrave",  array(
    "type"     => "int",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Engrave",
    "input"    => "select",
    "class"    => "",
    "source"   => "eav/entity_attribute_source_boolean",
    "global"   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    "visible"  => true,
    "required" => false,
    "user_defined"  => false,
    "default" => "",
    "searchable" => false,
    "filterable" => false,
    "comparable" => false,
	
    "visible_on_front"  => false,
    "unique"     => false,
    "note"       => "",
    "group"      => "General"
	));
$installer->endSetup();
	 