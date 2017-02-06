<?php
App::uses('AppController', 'Controller');
/**
 * Parroquias Controller
 *
 * @property Parroquia $Parroquia
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ParroquiasController extends AppController {

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
		$this->Parroquia->recursive = 0;
		$this->set('parroquias', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Parroquia->exists($id)) {
			throw new NotFoundException(__('Invalid parroquia'));
		}
		$options = array('conditions' => array('Parroquia.' . $this->Parroquia->primaryKey => $id));
		$this->set('parroquia', $this->Parroquia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Parroquia->create();
			if ($this->Parroquia->save($this->request->data)) {
				$this->Session->setFlash(__('The parroquia has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parroquia could not be saved. Please, try again.'), 'flash/error');
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
        $this->Parroquia->id = $id;
		if (!$this->Parroquia->exists($id)) {
			throw new NotFoundException(__('Invalid parroquia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Parroquia->save($this->request->data)) {
				$this->Session->setFlash(__('The parroquia has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parroquia could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Parroquia.' . $this->Parroquia->primaryKey => $id));
			$this->request->data = $this->Parroquia->find('first', $options);
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
		$this->Parroquia->id = $id;
		if (!$this->Parroquia->exists()) {
			throw new NotFoundException(__('Invalid parroquia'));
		}
		if ($this->Parroquia->delete()) {
			$this->Session->setFlash(__('Parroquia deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Parroquia was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
