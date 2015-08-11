<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 * @property Cliente $Cliente
 * @property PaginatorComponent $Paginator
 */
class ClientesController extends AppController {

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
		$this->Cliente->recursive = 0;
		$this->set('clientes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Cliente inválido'));
		}
		$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
		$this->set('cliente', $this->Cliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash('El cliente ha sido guardado.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cliente no ha sido guardado, por favor intentelo de nuevo.'));
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
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Cliente inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Cliente->id=$id;
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash('El cliente ha sido guardado.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cliente no ha sido guardado, por favor intentelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
			$this->request->data = $this->Cliente->find('first', $options);
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
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Cliente inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cliente->delete()) {
			$this->Session->setFlash('El cliente ha sido eliminado.', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El cliente no ha sido eliminado, por favor intentelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
