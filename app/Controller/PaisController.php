<?php
App::uses('AppController', 'Controller');
/**
 * Pais Controller
 *
 * @property Pai $Pai
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PaisController extends AppController {

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
		$this->Pai->recursive = 0;
		$this->set('pais', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pai->exists($id)) {
			throw new NotFoundException(__('Invalid pai'));
		}
		$options = array('conditions' => array('Pai.' . $this->Pai->primaryKey => $id));
		$this->set('pai', $this->Pai->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pai->create();
			if ($this->Pai->save($this->request->data)) {
				$this->Session->setFlash(__('The pai has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pai could not be saved. Please, try again.'), 'flash/error');
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
        $this->Pai->id = $id;
		if (!$this->Pai->exists($id)) {
			throw new NotFoundException(__('Invalid pai'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pai->save($this->request->data)) {
				$this->Session->setFlash(__('The pai has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pai could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Pai.' . $this->Pai->primaryKey => $id));
			$this->request->data = $this->Pai->find('first', $options);
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
		$this->Pai->id = $id;
		if (!$this->Pai->exists()) {
			throw new NotFoundException(__('Invalid pai'));
		}
		if ($this->Pai->delete()) {
			$this->Session->setFlash(__('Pai deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pai was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
