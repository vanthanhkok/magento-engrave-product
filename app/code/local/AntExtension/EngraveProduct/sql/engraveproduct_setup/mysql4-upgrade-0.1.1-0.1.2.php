<?php
$installer = $this;
$installer->startSetup();

$installer->addAttribute("catalog_product", "engraveprice",  array(
    "type"     => "text",
    "backend"  => "",
    "frontend" => "",
    "label"    => "Engrave Price",
    "input_renderer"    => "engraveproduct/adminhtml_attribute_engraveprice",
    "class"    => "",
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
