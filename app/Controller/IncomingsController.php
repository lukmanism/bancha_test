<?php
App::uses('AppController', 'Controller');
/**
 * Incomings Controller
 *
 * @property Incoming $Incoming
 */
class IncomingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Incoming->recursive = 0;
		$this->set('incomings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Incoming->id = $id;
		if (!$this->Incoming->exists()) {
			throw new NotFoundException(__('Invalid incoming'));
		}
		$this->set('incoming', $this->Incoming->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Incoming->create();
			if ($this->Incoming->save($this->request->data)) {
				$this->Session->setFlash(__('The incoming has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The incoming could not be saved. Please, try again.'));
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
		$this->Incoming->id = $id;
		if (!$this->Incoming->exists()) {
			throw new NotFoundException(__('Invalid incoming'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Incoming->save($this->request->data)) {
				$this->Session->setFlash(__('The incoming has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The incoming could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Incoming->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Incoming->id = $id;
		if (!$this->Incoming->exists()) {
			throw new NotFoundException(__('Invalid incoming'));
		}
		if ($this->Incoming->delete()) {
			$this->Session->setFlash(__('Incoming deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Incoming was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
