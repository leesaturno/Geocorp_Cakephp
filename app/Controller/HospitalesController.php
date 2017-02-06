<?php
App::uses('AppController', 'Controller');
/**
 * Hospitales Controller
 *
 * @property Hospitale $Hospitale
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class HospitalesController extends AppController {

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
		$this->Hospitale->recursive = 0;
		$this->set('hospitales', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hospitale->exists($id)) {
			throw new NotFoundException(__('Invalid hospitale'));
		}
		$options = array('conditions' => array('Hospitale.' . $this->Hospitale->primaryKey => $id));
		$this->set('hospitale', $this->Hospitale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hospitale->create();
			if ($this->Hospitale->save($this->request->data)) {
				$this->Session->setFlash(__('The hospitale has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hospitale could not be saved. Please, try again.'), 'flash/error');
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
        $this->Hospitale->id = $id;
		if (!$this->Hospitale->exists($id)) {
			throw new NotFoundException(__('Invalid hospitale'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hospitale->save($this->request->data)) {
				$this->Session->setFlash(__('The hospitale has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hospitale could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Hospitale.' . $this->Hospitale->primaryKey => $id));
			$this->request->data = $this->Hospitale->find('first', $options);
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
		$this->Hospitale->id = $id;
		if (!$this->Hospitale->exists()) {
			throw new NotFoundException(__('Invalid hospitale'));
		}
		if ($this->Hospitale->delete()) {
			$this->Session->setFlash(__('Hospitale deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hospitale was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
