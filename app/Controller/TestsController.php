<?php
App::uses('AppController', 'Controller');

class TestsController extends AppController {



    public function beforeFilter() {
        $this->Auth->allow();
    }



    function get_last_invoice_num() {
    	$this->loadModel('Factura');
    	debug( $this->Factura->getLastInvoiceNum() );
    	exit();


    }

}
