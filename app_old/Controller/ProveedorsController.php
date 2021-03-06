<?php
App::uses('AppController', 'Controller');
/**
 * Proveedors Controller
 *
 * @property Proveedor $Proveedor
 * @property PaginatorComponent $Paginator
 */
class ProveedorsController extends AppController {

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
		$this->Proveedor->recursive = 0;
		$this->set('proveedors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proveedor->exists($id)) {
			throw new NotFoundException(__('Proveedor inválido'));
		}
		$options = array('conditions' => array('Proveedor.' . $this->Proveedor->primaryKey => $id));
		$this->set('proveedor', $this->Proveedor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proveedor->create();
			if ($this->Proveedor->save($this->request->data)) {
				$this->Session->setFlash('El proveedor ha sido guardado.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El proveedor no ha sido guardado, por favor intentelo de nuevo.', 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proveedor->exists($id)) {
			throw new NotFoundException(__('Proveedor inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Proveedor->id=$id;
			if ($this->Proveedor->save($this->request->data)) {
				$this->Session->setFlash('El proveedor ha sido modificado.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El proveedor no ha sido guardado, por favor intentelo de nuevo.', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Proveedor.' . $this->Proveedor->primaryKey => $id));
			$this->request->data = $this->Proveedor->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proveedor->id = $id;
		if (!$this->Proveedor->exists()) {
			throw new NotFoundException(__('Proveedor inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proveedor->delete()) {
			$this->Session->setFlash('El proveedor ha sido eliminado.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El proveedor no ha sido eliminado, por favor intentelo de nuevo.', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
