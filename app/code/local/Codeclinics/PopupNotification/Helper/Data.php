<?php
/**
 * Codeclinics.com
 * info@codeclinics.com
 * Helper File
 */
 ?>
<?php
class Codeclinics_PopupNotification_Helper_Data extends Mage_Core_Helper_Abstract
{
	
	public function isActive(){
        
        return Mage::getStoreConfig('popupnotification/general/enabled');
    }
	
	public function getHeight(){
        
        return Mage::getStoreConfig('popupnotification/general/height');
    }
	
	public function getWidth(){
        
        return Mage::getStoreConfig('popupnotification/general/width');
    }
	
	public function getCookieTime(){
        
        return Mage::getStoreConfig('popupnotification/general/cookie');
    }
	
}