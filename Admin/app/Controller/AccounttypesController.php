<?php
App::uses('AppController', 'Controller');
/**
 * Accounttypes Controller
 *
 * @property Accounttype $Accounttype
 */
class AccounttypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Accounttype->recursive = 0;
		$this->set('accounttypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Accounttype->exists($id)) {
			throw new NotFoundException(__('Invalid accounttype'));
		}
		$options = array('conditions' => array('Accounttype.' . $this->Accounttype->primaryKey => $id));
		$this->set('accounttype', $this->Accounttype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Accounttype->create();
			if ($this->Accounttype->save($this->request->data)) {
				$this->Session->setFlash(__('The accounttype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounttype could not be saved. Please, try again.'));
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
		if (!$this->Accounttype->exists($id)) {
			throw new NotFoundException(__('Invalid accounttype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Accounttype->save($this->request->data)) {
				$this->Session->setFlash(__('The accounttype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounttype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Accounttype.' . $this->Accounttype->primaryKey => $id));
			$this->request->data = $this->Accounttype->find('first', $options);
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
		$this->Accounttype->id = $id;
		if (!$this->Accounttype->exists()) {
			throw new NotFoundException(__('Invalid accounttype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Accounttype->delete()) {
			$this->Session->setFlash(__('Accounttype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Accounttype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
