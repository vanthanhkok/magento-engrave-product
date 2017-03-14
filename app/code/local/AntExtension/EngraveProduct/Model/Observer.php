<?php
/**
 * Created by PhpStorm.
 * User: vanth
 * Date: 26/02/2017
 * Time: 12:07 CH
 */

class AntExtension_EngraveProduct_Model_Observer {
    public function customImageInput($observer) {
        $enableEngrave = Mage::getStoreConfig(
            'generalsetting/extension/turnon',
            Mage::app()->getStore()
        );
        $form = $observer->getEvent()->getForm();
        $engraveimage = $form->getElement('engraveimage');
        $engraveframe = $form->getElement('engraveframe');
        if ($engraveimage) {
            $engraveimage->setRenderer(
                Mage::app()->getLayout()->createBlock('engraveproduct/adminhtml_uploadimage')
            );
        }
        if ($engraveframe) {
            $engraveframe->setRenderer(
                Mage::app()->getLayout()->createBlock('engraveproduct/adminhtml_uploadimage')
            );
        }
    }

    public function controllerActionLayoutLoadBefore(Varien_Event_Observer $observer){

        $params = $observer->getEvent()->getAction()->getRequest()->getParams();
        $fullActionName = $observer->getEvent()->getAction()->getFullActionName();
        $storeId = Mage::app()->getStore()->getStoreId();
        if($fullActionName == 'catalog_product_view') {
            $productId = $params['id'];
            $engraveStyle = Mage::getResourceModel('catalog/product')
                          ->getAttributeRawValue($productId, 'engravestyle',$storeId);
            $activeEngrave = Mage::helper('engraveproduct')->checkProductEngrave($productId);
            if($engraveStyle >=2 && $activeEngrave) {
                Mage::app()->getLayout()->getUpdate()->addHandle('engraveproduct_' . $fullActionName);
            }
        }
    }
}