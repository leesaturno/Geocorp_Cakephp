<?php
App::uses('AppController', 'Controller');
/**
 * Comuns Controller
 *
 * @property Comun $Comun
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ComunsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Comun->recursive = 0;
		$this->set('comuns', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comun->exists($id)) {
			throw new NotFoundException(__('Invalid comun'));
		}
		$options = array('conditions' => array('Comun.' . $this->Comun->primaryKey => $id));
		$this->set('comun', $this->Comun->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comun->create();
			if ($this->Comun->save($this->request->data)) {
				$this->Session->setFlash(__('The comun has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comun could not be saved. Please, try again.'), 'flash/error');
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
        $this->Comun->id = $id;
		if (!$this->Comun->exists($id)) {
			throw new NotFoundException(__('Invalid comun'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comun->save($this->request->data)) {
				$this->Session->setFlash(__('The comun has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comun could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Comun.' . $this->Comun->primaryKey => $id));
			$this->request->data = $this->Comun->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Comun->id = $id;
		if (!$this->Comun->exists()) {
			throw new NotFoundException(__('Invalid comun'));
		}
		if ($this->Comun->delete()) {
			$this->Session->setFlash(__('Comun deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comun was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
