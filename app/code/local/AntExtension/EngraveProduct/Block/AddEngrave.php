<?php   
class AntExtension_EngraveProduct_Block_AddEngrave extends Mage_Catalog_Block_Product_View_Abstract {


    protected $EngraveAttributeCode = 'engrave';

    public function hasEngrave(){
        $storeId = Mage::app()->getStore();
        $_product = $this->getProduct();
        $_resource = Mage::getSingleton('catalog/product')->getResource();
        $optionValue = $_resource->getAttributeRawValue($_product->getId(),$this->EngraveAttributeCode,$storeId);
        return $optionValue;
    }


    public function getBaseImage(){
        $_product = $this->getProduct();
        return Mage::getModel('catalog/product_media_config')
            ->getMediaUrl( $_product->getImage() );
    }
}