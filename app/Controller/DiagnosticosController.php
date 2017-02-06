<?php
App::uses('AppController', 'Controller');
/**
 * Diagnosticos Controller
 *
 * @property Diagnostico $Diagnostico
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DiagnosticosController extends AppController {

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
		$this->Diagnostico->recursive = 0;
		$this->set('diagnosticos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Diagnostico->exists($id)) {
			throw new NotFoundException(__('Invalid diagnostico'));
		}
		$options = array('conditions' => array('Diagnostico.' . $this->Diagnostico->primaryKey => $id));
		$this->set('diagnostico', $this->Diagnostico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Diagnostico->create();
			if ($this->Diagnostico->save($this->request->data)) {
				$this->Session->setFlash(__('The diagnostico has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diagnostico could not be saved. Please, try again.'), 'flash/error');
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
        $this->Diagnostico->id = $id;
		if (!$this->Diagnostico->exists($id)) {
			throw new NotFoundException(__('Invalid diagnostico'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Diagnostico->save($this->request->data)) {
				$this->Session->setFlash(__('The diagnostico has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diagnostico could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Diagnostico.' . $this->Diagnostico->primaryKey => $id));
			$this->request->data = $this->Diagnostico->find('first', $options);
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
		$this->Diagnostico->id = $id;
		if (!$this->Diagnostico->exists()) {
			throw new NotFoundException(__('Invalid diagnostico'));
		}
		if ($this->Diagnostico->delete()) {
			$this->Session->setFlash(__('Diagnostico deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Diagnostico was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
