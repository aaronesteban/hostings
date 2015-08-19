<?php
/************
  * Use these settings to set defaults for the Paypal Helper class.
  * The PaypalHelper class will help you create paynow, subscribe, donate, or addtocart buttons for you.
  * 
  * All these options can be set on the fly as well within the helper
  */
  
class PaypalIpnConfig {

  /************
    * Each settings key coresponds to the Paypal API.  Review www.paypal.com for more. 
    */
  var $settings = array(
    'business' => 'hola@deramosandserch.com', //'live_email@paypal.com', //Your Paypal email account
    'server' => 'https://www.paypal.com', //Main paypal server.
    'notify_url' => 'http://deramosandserch.com/ssl/hosting/paypal_ipn/process', //'http://www.yoursite.com/paypal_ipn/process', //Notify_url... set this to the process path of your paypal_ipn::instant_payment_notification::process action
    'currency_code' => 'EUR', //Currency
    'lc' => 'ES', //Locality
    'item_name' => 'Paypal_IPN', //Default item name.
    'amount' => '15.00', //Default item amount.
    'return' => 'http://deramosandserch.com/ssl/hosting/payment-done',
  );
  
  /***********
    * Test settings to test with using a sandbox paypal account.
    */
  var $testSettings = array(
    //'business' => 'seller_1332176508_biz@gmail.com', //'sandbox_email@paypal.com',
    'business' => 'ennety-facilitator@gmail.com', //'sandbox_email@paypal.com',
    'server' => 'https://www.sandbox.paypal.com',
    'notify_url' => 'http://facturahosting.drands.ddns.net/paypal_ipn/process', //'http://www.yoursite.com/paypal_ipn/process',
    'currency_code' => 'EUR',
    'lc' => 'ES',
    'item_name' => 'Paypal_IPN',
    'amount' => '15.00',
    'return' => 'http://facturahosting.drands.ddns.net/payment-done',
  );


  function __construct(){
    $this->settings['notify_url'] = getBaseUrl().'/paypal_ipn/process';
    $this->settings['return'] = getBaseUrl().'/shop/payment-done';
    
    $this->testSettings['notify_url'] = getBaseUrl().'/paypal_ipn/process';
    $this->testSettings['return'] = getBaseUrl().'/shop/payment-done';
  }


}
?>