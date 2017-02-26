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
                Mage::app()->getLayout()->createBlock('engraveproduct/adminhtml_product_attribute_type_image')
            );
        }
        if ($engraveframe) {
            $engraveframe->setRenderer(
                Mage::app()->getLayout()->createBlock('engraveproduct/adminhtml_product_attribute_type_image')
            );
        }
    }

    public function controllerActionLayoutLoadBefore(Varien_Event_Observer $observer){

        $params = $observer->getEvent()->getAction()->getRequest()->getParams();
        $fullActionName = $observer->getEvent()->getAction()->getFullActionName();
        if($fullActionName == 'catalog_product_view') {
            $productId = $params['id'];
            $engraveStyle = Mage::getResourceModel('catalog/product')
                          ->getAttributeRawValue($productId, 'engravestyle', $storeId = Mage::app()->getStore());
            if($engraveStyle == 2) {
                Mage::app()->getLayout()->getUpdate()->addHandle('engraveproduct_' . $fullActionName);
            }
        }
    }
}