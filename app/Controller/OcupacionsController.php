<?php
App::uses('AppController', 'Controller');
/**
 * Ocupacions Controller
 *
 * @property Ocupacion $Ocupacion
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class OcupacionsController extends AppController {

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
		$this->Ocupacion->recursive = 0;
		$this->set('ocupacions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ocupacion->exists($id)) {
			throw new NotFoundException(__('Invalid ocupacion'));
		}
		$options = array('conditions' => array('Ocupacion.' . $this->Ocupacion->primaryKey => $id));
		$this->set('ocupacion', $this->Ocupacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ocupacion->create();
			if ($this->Ocupacion->save($this->request->data)) {
				$this->Session->setFlash(__('The ocupacion has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ocupacion could not be saved. Please, try again.'), 'flash/error');
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
        $this->Ocupacion->id = $id;
		if (!$this->Ocupacion->exists($id)) {
			throw new NotFoundException(__('Invalid ocupacion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ocupacion->save($this->request->data)) {
				$this->Session->setFlash(__('The ocupacion has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ocupacion could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Ocupacion.' . $this->Ocupacion->primaryKey => $id));
			$this->request->data = $this->Ocupacion->find('first', $options);
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
		$this->Ocupacion->id = $id;
		if (!$this->Ocupacion->exists()) {
			throw new NotFoundException(__('Invalid ocupacion'));
		}
		if ($this->Ocupacion->delete()) {
			$this->Session->setFlash(__('Ocupacion deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ocupacion was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
