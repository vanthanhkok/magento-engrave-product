<?php
class AntExtension_Engraveproduct_Helper_Data extends Mage_Core_Helper_Abstract
{
    static function getFrameWidth(){
        return self::getConfig('engraveframe/framesize/width');
    }
    static function getFrameHeight(){
        return self::getConfig('engraveframe/framesize/height');
    }
    static function getConfig($path){
        $configValue = Mage::getStoreConfig(
            $path,
            Mage::app()->getStore()
        );

        return $configValue;
    }
    public function checkProductEngrave($product_id){
        $storeId = Mage::app()->getStore()->getStoreId();
        $_resource = Mage::getSingleton('catalog/product')->getResource();
        $optionValue = $_resource->getAttributeRawValue($product_id,'engrave',$storeId);
        return $optionValue;
    }

    public function getConfigEngrave($product_id,$attribute_code){
        $storeId = Mage::app()->getStore()->getStoreId();
        $_resource = Mage::getSingleton('catalog/product')->getResource();
        $optionValue = $_resource->getAttributeRawValue($product_id,$attribute_code,$storeId);
        return $optionValue;
    }
}
	 