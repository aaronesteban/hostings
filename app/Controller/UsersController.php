<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {

		parent::beforeFilter();
		$this->Auth->allow('logout');
	}

	public function login() {
		$this->layout = 'login';

		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash('El nombre de usuario o la contraseña son incorrectos.', 'default', array('class' => 'alert alert-danger'));
		}
	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

	public function index() {

		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	public function add() {

		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('El usuario ha sido guardado.', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('El usuario no ha sido guardado, por favor intentelo de nuevo.', 'default', array('class' => 'alert alert-danger'));
		}
	}

	public function delete($id = null) {

		$this->request->allowMethod('post');

		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Usuario inválido'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash('El usuario ha sido eliminado', 'default', array('class' => 'alert alert-success'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('El usuario no ha sido eliminado', 'default', array('class' => 'alert alert-danger'));
		return $this->redirect(array('action' => 'index'));
	}

}

