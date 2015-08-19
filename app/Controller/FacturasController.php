<?php
App::uses('AppController', 'Controller');
/**
 * Facturas Controller
 *
 * @property Factura $Factura
 * @property PaginatorComponent $Paginator
 */
class FacturasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $helpers = array('PaypalIpn.Paypal');


    public function beforeFilter() {
        $this->Auth->allow('ver_cliente', 'payment_done', 'pdf');
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Factura->recursive = 0;
		$this->set('facturas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Factura->exists($id)) {
			throw new NotFoundException(__('Factura inválida'));
		}
		$options = array('conditions' => array('Factura.' . $this->Factura->primaryKey => $id));
		$this->set('factura', $this->Factura->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Factura->create();
			if ($this->Factura->save($this->request->data)) {
				$this->Session->setFlash('La factura ha sido guardada.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La factura no ha sido guardada, por favor intentelo de nuevo.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$servicios = $this->Factura->Servicio->find('list');
		$this->set(compact('servicios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Factura->exists($id)) {
			throw new NotFoundException(__('Factura inválida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Factura->id=$id;
			if ($this->Factura->save($this->request->data)) {
				$this->Session->setFlash('La factura ha sido modificada.', $element = 'default', $params = array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La factura no ha sido guardada, por favor intentelo de nuevo.', 'default', array('class' => 'alert alert-success'));
			}
		} else {
			$options = array('conditions' => array('Factura.' . $this->Factura->primaryKey => $id));
			$this->request->data = $this->Factura->find('first', $options);
		}
		$servicios = $this->Factura->Servicio->find('list');
		$this->set(compact('servicios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Factura->id = $id;
		if (!$this->Factura->exists()) {
			throw new NotFoundException(__('Factura inválida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Factura->delete()) {
			$this->Session->setFlash('La factura ha sido eliminada.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('La factura no ha sido eliminada, por favor intentelo de nuevo.', 'default', array('class' => 'alert alert-success'));
		}
		return $this->redirect(array('action' => 'index'));
	}



	public function ver_cliente($hash = null) {
		$this->layout = 'factura';

		$factura = $this->Factura->find('first', array(
			'conditions' => array(
				'hash' => $hash,
			),
			'contain' => array('Servicio'=>array('Cliente'))
		));

		$this->set('factura', $factura);


		//ITEMS FOR PAYPAL
		$items = array();
		$items[] = array(
			'item_name' => $factura['Factura']['name'] ,
			'amount' => $factura['Factura']['precio_total'] ,
			'quantity' => 1,
		);
		$this->set(compact('items'));

	}


	public function pdf($hash = null) {
		$this->layout = 'ajax';
		$this->autoRender = false;

		$factura = $this->Factura->find('first', array(
			'conditions' => array(
				'hash' => $hash,
			),
			'contain' => array('Servicio'=>array('Cliente'))
		));
		$this->set('factura', $factura);

        $this->pdfConfig = array(
            'orientation' => 'portrait',
            'filename' => 'Invoice_' . $hash
        );

		require_once(APP.'Vendor/dompdf/dompdf_config.inc.php');

		$dompdf = new DOMPDF();

		$this->set('cssfile', APP.'webroot/css/pdf.css');
		$dompdf->set_paper("A4", "portrait");		 

		$view = new View($this,false);
		$view->viewPath = 'Facturas';
		$view->layout = 'factura';
		$html = $view->render('ver_cliente');
		$html = str_replace('€', '&#0128;', $html);

		$dompdf->load_html(utf8_decode($html));
		$dompdf->render();
		$dompdf->stream('factura_'.$hash, array('Attachment'=>0));

	}



	public function payment_done($hash = null) {
		$this->layout = 'factura';
		$this->set(compact('hash'));

	}

}
