<?php   
class AntExtension_Engraveproduct_Block_Addengrave extends Mage_Catalog_Block_Product_View_Abstract {


    protected $EngraveAttributeCode = 'engrave';

    public function getConfigEngrave($attribute_code){
        $storeId = Mage::app()->getStore()->getStoreId();
        $_product = $this->getProduct();
        $_resource = Mage::getSingleton('catalog/product')->getResource();
        $optionValue = $_resource->getAttributeRawValue($_product->getId(),$attribute_code,$storeId);
        return $optionValue;
    }

    public function hasEngrave(){
        return $this->getConfigEngrave($this->EngraveAttributeCode);
    }


    public function getBaseImage(){
        $image = $this->getConfigEngrave('engraveimage');
        return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'/engrave_upload/'.$image;
    }

    public function getFrameImage(){
        $frame = $this->getConfigEngrave('engraveframe');
        return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'/engrave_upload/'.$frame;
    }
}