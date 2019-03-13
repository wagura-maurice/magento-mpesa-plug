<?php
class mpesa_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	protected $_code = 'mpesa';	
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = true;
	protected $_canUseForMultishipping  = false;
	
	public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('mpesa/payment/redirect', array('_secure' => true));
	}
}
?>