<?php
App::uses('AppController', 'Controller');
/**
 * Profesions Controller
 *
 * @property Profesion $Profesion
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ProfesionsController extends AppController {

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
		$this->Profesion->recursive = 0;
		$this->set('profesions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Profesion->exists($id)) {
			throw new NotFoundException(__('Invalid profesion'));
		}
		$options = array('conditions' => array('Profesion.' . $this->Profesion->primaryKey => $id));
		$this->set('profesion', $this->Profesion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profesion->create();
			if ($this->Profesion->save($this->request->data)) {
				$this->Session->setFlash(__('The profesion has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesion could not be saved. Please, try again.'), 'flash/error');
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
        $this->Profesion->id = $id;
		if (!$this->Profesion->exists($id)) {
			throw new NotFoundException(__('Invalid profesion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Profesion->save($this->request->data)) {
				$this->Session->setFlash(__('The profesion has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesion could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Profesion.' . $this->Profesion->primaryKey => $id));
			$this->request->data = $this->Profesion->find('first', $options);
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
		$this->Profesion->id = $id;
		if (!$this->Profesion->exists()) {
			throw new NotFoundException(__('Invalid profesion'));
		}
		if ($this->Profesion->delete()) {
			$this->Session->setFlash(__('Profesion deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Profesion was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
