<?php
class AntExtension_EngraveProduct_Helper_Data extends Mage_Core_Helper_Abstract
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
}
	 