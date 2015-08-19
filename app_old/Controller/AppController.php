<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'clientes',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'clientes',
                'action' => 'index'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        ),
        'DebugKit.Toolbar'
    );

    public $helpers = array('Time');

    public function isAuthorized($user) {
    // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

    // Default deny

        return false;
    }

    public function beforeFilter() {
        //$this->Auth->allow('home');
    }




    function afterPaypalNotification($txnId){
        //Here is where you can implement code to apply the transaction to your app.
        //for example, you could now mark an order as paid, a subscription, or give the user premium access.
        //retrieve the transaction using the txnId passed and apply whatever logic your site needs.

        $transaction = ClassRegistry::init('PaypalIpn.InstantPaymentNotification')->findById($txnId);
        $this->log($transaction['InstantPaymentNotification']['id'], 'paypal');

        //Tip: be sure to check the payment_status is complete because failure 
        //     are also saved to your database for review.

        if($transaction['InstantPaymentNotification']['payment_status'] == 'Completed'){
            //Yay!  We have monies!
            $factura_id = $transaction['InstantPaymentNotification']['custom'];
            $amount = $transaction['InstantPaymentNotification']['mc_gross'];
            $this->_orderPaid($factura_id, $amount, 'paypal');
        }
        else {
            //Oh no, better look at this transaction to determine what to do; like email a decline letter.
        }
    }


    function _orderPaid($factura_id, $amount=null, $tipo_pago=''){
        $this->loadModel('Factura');

        $this->Factura->id = $factura_id;
        if (!$this->Factura->exists()) {
            throw new NotFoundException(__('Invalid order'));
        }
        $factura = $this->Factura->read(null, $factura_id);

        if($factura['Factura']['precio_total'] < $amount){
            throw new MethodNotAllowedException(__('Invalid amount'));
        }

        if(!$factura['Factura']['pagado']){

            //marcamos el order como pagado
            $this->Factura->saveField('pagado', true);
            $factura['Factura']['invoice_num'] = $this->Factura->getLastInvoiceNum() + 1;
            $this->Factura->saveField('invoice_num', $factura['Factura']['invoice_num']);

            if ($tipo_pago) {
                $this->Factura->saveField('tipo_pago', $tipo_pago);
            }       

            //SEND MAIL

            $factura_email = $this->Factura->find('first', array(
                'conditions' => array(
                    'hash' => $hash,
                ),
                'contain' => array('Servicio'=>array('Cliente'))
            ));

            $this->_sendMail(null, $factura_email, 'pagado_email');
        }

    }

    function _sendMail($cliente, $factura, $template = 'first_email', $text = null) {
        App::uses('CakeEmail', 'Network/Email');

        $email = new CakeEmail();
        $email->config('smtp');
        if ($template === 'our_email') {
            $email->to( Configure::read('Facturacion.email') );
        }
        else{
            $email->to($cliente['email']);
        }
        $email->bcc( Configure::read('Facturacion.email') );
        $email->template($template)
        ->emailFormat('html')
        ->subject(Configure::read('Email.Subject.'.$template))
        ->viewVars( compact('cliente', 'factura', 'text') )
        ->send();
    }
}