<?php
App::uses('AppController', 'Controller');
/**
 * Etnias Controller
 *
 * @property Etnia $Etnia
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EtniasController extends AppController {

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
		$this->Etnia->recursive = 0;
		$this->set('etnias', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Etnia->exists($id)) {
			throw new NotFoundException(__('Invalid etnia'));
		}
		$options = array('conditions' => array('Etnia.' . $this->Etnia->primaryKey => $id));
		$this->set('etnia', $this->Etnia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Etnia->create();
			if ($this->Etnia->save($this->request->data)) {
				$this->Session->setFlash(__('The etnia has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etnia could not be saved. Please, try again.'), 'flash/error');
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
        $this->Etnia->id = $id;
		if (!$this->Etnia->exists($id)) {
			throw new NotFoundException(__('Invalid etnia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Etnia->save($this->request->data)) {
				$this->Session->setFlash(__('The etnia has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etnia could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Etnia.' . $this->Etnia->primaryKey => $id));
			$this->request->data = $this->Etnia->find('first', $options);
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
		$this->Etnia->id = $id;
		if (!$this->Etnia->exists()) {
			throw new NotFoundException(__('Invalid etnia'));
		}
		if ($this->Etnia->delete()) {
			$this->Session->setFlash(__('Etnia deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Etnia was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
