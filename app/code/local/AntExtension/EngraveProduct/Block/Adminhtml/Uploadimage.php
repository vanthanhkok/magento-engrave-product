<?php
/**
 * Created by PhpStorm.
 * User: vanth
 * Date: 26/02/2017
 * Time: 12:13 CH
 */

class AntExtension_Engraveproduct_Block_Adminhtml_Uploadimage
    extends Mage_Adminhtml_Block_Widget
    implements Varien_Data_Form_Element_Renderer_Interface {
    public function __construct()
    {
        $this->setTemplate('engrave/product/image.phtml');
    }
    public function render(Varien_Data_Form_Element_Abstract $element) {
        $this->setElement($element);
        return $this->toHtml();
    }
}