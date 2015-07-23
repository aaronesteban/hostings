<?php
App::uses('AppController', 'Controller');
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
}
