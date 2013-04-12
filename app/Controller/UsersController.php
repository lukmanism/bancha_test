<?php
class UsersController extends AppController {

    public function index() {
        $this->User->recursive = 0;
        $this->Paginator->setAllowedFilters(array('username','role'));
        $users = $this->paginate();   // added
	    $this->set('users', $users);  // modified, original $this->set('users', $this->paginate());
	    return array_merge($this->request['paging']['User'],array('records'=>$users));  // added        
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
	    return $this->User->data;  // added
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();

	        if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) return $this->User->saveFieldsAndReturn($this->request->data);  // added

            if ($this->User->save($this->request->data, array('validate' => false))) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }

	    if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) return $this->User->saveFieldsAndReturn($this->request->data);  // added

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data['0']['data'])) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }

	    if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) return $this->User->deleteAndReturn();  // added

        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action'=>'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}