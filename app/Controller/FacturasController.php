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
			throw new NotFoundException(__('Invalid factura'));
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
				$this->Session->setFlash(__('The factura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The factura could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid factura'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Factura->save($this->request->data)) {
				$this->Session->setFlash(__('The factura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The factura could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid factura'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Factura->delete()) {
			$this->Session->setFlash(__('The factura has been deleted.'));
		} else {
			$this->Session->setFlash(__('The factura could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
