<?php
$installer = $this;
$installer->startSetup();


$installer->addAttribute("catalog_category", "engravestyle",  array(
    "type"     => "int",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Type",
    "input"    => "select",
    "class"    => "",
    "source"   => "engraveproduct/eav_entity_attribute_source_categoryoptions14879870130",
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
    "note"       => ""

	));

$installer->addAttribute("catalog_category", "engraveimage",  array(
    "type"     => "varchar",
    "backend"  => "catalog/category_attribute_backend_image",
    "frontend" => "",
    "label"    => "Image",
    "input"    => "image",
    "class"    => "",
    "source"   => "",
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
    "note"       => ""

	));

$installer->addAttribute("catalog_category", "engraveframe",  array(
    "type"     => "varchar",
    "backend"  => "catalog/category_attribute_backend_image",
    "frontend" => "",
    "label"    => "Frame",
    "input"    => "image",
    "class"    => "",
    "source"   => "",
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
    "note"       => ""

	));
$installer->endSetup();
	 