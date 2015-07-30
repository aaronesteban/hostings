<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Servicios Controller
 *
 * @property Servicio $Servicio
 * @property PaginatorComponent $Paginator
 */
class ServiciosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Servicio->recursive = 0;
		$this->set('servicios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Servicio->exists($id)) {
			throw new NotFoundException(__('Servicio inválido'));
		}
		$options = array('conditions' => array('Servicio.' . $this->Servicio->primaryKey => $id));
		$this->set('servicio', $this->Servicio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Servicio->create();
			if ($this->Servicio->save($this->request->data)) {
				$this->Session->setFlash('El servicio ha sido guardado.', 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El servicio no ha sido guardado, por favor intentelo de nuevo.'));
			}
		}
		$clientes = $this->Servicio->Cliente->find('list');
		$proveedors = $this->Servicio->Proveedor->find('list');
		$this->set(compact('clientes', 'proveedors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Servicio->exists($id)) {
			throw new NotFoundException(__('Servicio inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Servicio->id=$id;
			if ($this->Servicio->save($this->request->data)) {
				$this->Session->setFlash('El servicio ha sido guardado.', 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El servicio no ha sido guardado, por favor intentelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Servicio.' . $this->Servicio->primaryKey => $id));
			$this->request->data = $this->Servicio->find('first', $options);
		}
		$clientes = $this->Servicio->Cliente->find('list');
		$proveedors = $this->Servicio->Proveedor->find('list');
		$this->set(compact('clientes', 'proveedors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Servicio->id = $id;
		if (!$this->Servicio->exists()) {
			throw new NotFoundException(__('Servicio inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Servicio->delete()) {
			$this->Session->setFlash('El servicio ha sido eliminado.', 'default', array('class' => 'success'));
		} else {
			$this->Session->setFlash(__('El servicio no ha sido eliminado, por favor intentelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	function cronjob(){
		$now = new DateTime('now');
		$twoweeks = new DateTime( Configure::read('semanas_aviso'));
		$options = array(
			'conditions' => array(
				'Servicio.vencimiento >=' => $now->format('Y-m-d'),
				'Servicio.vencimiento <' => $twoweeks->format('Y-m-d')
			),
			'contain' => array('Cliente')
		);

		$servicios = $this->Servicio->find('all',$options);
		

		foreach ($servicios as $servicio) {

			
			$options = array(
				'conditions' => array(
					'Factura.servicio_id' => $servicio['Servicio']['id'],
					'Factura.fecha >=' => $now->format('Y-m-d'),
					'Factura.fecha <' => $twoweeks->format('Y-m-d')
				),
				'contain' => array()
			);

			$facturas = $this->Servicio->Factura->find('all', $options);

			if (empty($facturas)) {
				$factura = array(
					'Factura' => array(
						'servicio_id' => $servicio['Servicio']['id'],
						'pagado' => '0',
						'fecha' => $servicio['Servicio']['vencimiento'],
						'pvp' => $servicio['Servicio']['pvp'],
						'name' => $servicio['Servicio']['name'],
						),
					);

				$this->Servicio->Factura->create();
				if ($this->Servicio->Factura->save($factura)) {
					$this->_sendMail($servicio['Cliente'], $factura, 'first_email');
				}
			} else {
				//recordatorios
			}
		
		}
		exit();
	}

	function _sendMail($cliente, $factura, $template = 'first_email') {
		$email = new CakeEmail();
		$email->config('smtp');
		$email->to('ennety@gmail.com');
		//$email->to($cliente['email']);
		$email->bcc('ennety@gmail.com');
		$email->template($template)
		->emailFormat('html')
		->subject(Configure::read('Email.Subject.first_email'))
		->viewVars( compact('cliente', 'factura') )
		->send();
	}
}
