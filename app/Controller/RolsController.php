<?php
App::uses('AppController', 'Controller');
/**
 * Rols Controller
 *
 * @property Rol $Rol
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class RolsController extends AppController {

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
		$this->Rol->recursive = 0;
		$this->set('rols', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rol->exists($id)) {
			throw new NotFoundException(__('Invalid rol'));
		}
		$options = array('conditions' => array('Rol.' . $this->Rol->primaryKey => $id));
		$this->set('rol', $this->Rol->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rol->create();
			if ($this->Rol->save($this->request->data)) {
				$this->Session->setFlash(__('The rol has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rol could not be saved. Please, try again.'), 'flash/error');
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
        $this->Rol->id = $id;
		if (!$this->Rol->exists($id)) {
			throw new NotFoundException(__('Invalid rol'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rol->save($this->request->data)) {
				$this->Session->setFlash(__('The rol has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rol could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Rol.' . $this->Rol->primaryKey => $id));
			$this->request->data = $this->Rol->find('first', $options);
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
		$this->Rol->id = $id;
		if (!$this->Rol->exists()) {
			throw new NotFoundException(__('Invalid rol'));
		}
		if ($this->Rol->delete()) {
			$this->Session->setFlash(__('Rol deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rol was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
