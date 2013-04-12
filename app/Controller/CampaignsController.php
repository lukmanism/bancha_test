<?php
App::uses('AppController', 'Controller');
/**
 * Campaigns Controller
 *
 * @property Campaign $Campaign
 */
class CampaignsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Campaign->recursive = 0;
		$this->set('campaigns', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Campaign->id = $id;
		if (!$this->Campaign->exists()) {
			throw new NotFoundException(__('Invalid campaign'));
		}
		$this->set('campaign', $this->Campaign->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Campaign->create();
			if ($this->Campaign->save($this->request->data)) {
				$this->Session->setFlash(__('The campaign has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campaign could not be saved. Please, try again.'));
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
		$this->Campaign->id = $id;
		if (!$this->Campaign->exists()) {
			throw new NotFoundException(__('Invalid campaign'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Campaign->save($this->request->data)) {
				$this->Session->setFlash(__('The campaign has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campaign could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Campaign->read(null, $id);
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
		$this->Campaign->id = $id;
		if (!$this->Campaign->exists()) {
			throw new NotFoundException(__('Invalid campaign'));
		}
		if ($this->Campaign->delete()) {
			$this->Session->setFlash(__('Campaign deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Campaign was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
