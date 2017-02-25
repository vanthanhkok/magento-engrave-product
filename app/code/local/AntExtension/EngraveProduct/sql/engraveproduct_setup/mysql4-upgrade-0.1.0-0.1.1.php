<?php
$installer = $this;
$installer->startSetup();
$installer->removeAttribute('catalog_product', 'engrave');
$installer->removeAttribute('catalog_product', 'engravestyle');
$installer->removeAttribute('catalog_product', 'engraveimage');
$installer->removeAttribute('catalog_product', 'engraveframe');

$installer->addAttributeGroup('catalog_product', 'Default', 'Engrave', 1000);

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
    "group"      => "Engrave"
));

$installer->addAttribute("catalog_product", "engravestyle",  array(
    "type"     => "int",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Type",
    "input"    => "select",
    "class"    => "",
    "source"   => "engraveproduct/eav_entity_attribute_source_engravestyle",
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
    "group"      => "Engrave"

	));

$installer->addAttribute("catalog_product", "engraveimage",  array(
    "type"     => "varchar",
    "backend"  => "engraveproduct/product_attribute_backend_image",
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
    "note"       => "",
    "group"      => "Engrave"
	));

$installer->addAttribute("catalog_product", "engraveframe",  array(
    "type"     => "varchar",
    "backend"  => "engraveproduct/product_attribute_backend_image",
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
    "note"       => "",
    "group"      => "Engrave"
	));
$installer->endSetup();
	 