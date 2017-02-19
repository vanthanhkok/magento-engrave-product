<?php
/**
 * Created by PhpStorm.
 * User: vanth
 * Date: 17/02/2017
 * Time: 1:56 CH
 */

class AntExtension_EngraveProduct_DesignController extends Mage_Core_Controller_Front_Action {

    public function saveAction(){
        if($this->getRequest()->isPost()){
            $source = $this->getRequest()->getPost('source','');
            try {
                $save = $this->base64_to_jpeg($source);
                $result['success'] = true;
                $result['path'] = $save;
            }
            catch (Mage_Core_Exception $e){
                $result['error'] = $e->getMessages();
            }
            catch (Exception $e) {
                $result['error'] = "error";
            }
        }
        $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
    }

    public function base64_to_jpeg($base64_string) {
        $fileName = 'design_'.time().'.png';
        $output_file = Mage::getBaseDir('media').DIRECTORY_SEPARATOR.'design'.DIRECTORY_SEPARATOR.$fileName;
        $ifp = fopen($output_file, "wb");
        $data = explode(',', $base64_string);
        fwrite($ifp, base64_decode($data[1]));
        fclose($ifp);
        return Mage::getUrl('media').'design/'.$fileName;
    }

    public function AddAction(){
        if($this->getRequest()->isPost()){
            $design = $this->getRequest()->getPost('design','');
            $product = $this->getRequest()->getPost('product','');

            $cart = Mage::getSingleton('checkout/cart');
            $cart->init();

            $productInstance = Mage::getModel('catalog/product')->load($product);
            $param = array(
                'product' => $productInstance->getId(),
                'qty' => 1,
                'options' => array(
                    'engrave' => $design
                )
            );
            $request = new Varien_Object();
            $request->setData($param);
            $cart->addProduct($productInstance, $request);

            $cart->save();
            $quote = $cart->getQuote();

            if ($quote->hasItems($product)) {
                $this->getResponse()->setBody(Mage::helper('core')->jsonEncode(array('success'=> true)));
            }
        }
    }
}