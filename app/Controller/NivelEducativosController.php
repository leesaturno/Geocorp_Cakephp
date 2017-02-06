<?php
App::uses('AppController', 'Controller');
/**
 * NivelEducativos Controller
 *
 * @property NivelEducativo $NivelEducativo
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class NivelEducativosController extends AppController {

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
		$this->NivelEducativo->recursive = 0;
		$this->set('nivelEducativos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->NivelEducativo->exists($id)) {
			throw new NotFoundException(__('Invalid nivel educativo'));
		}
		$options = array('conditions' => array('NivelEducativo.' . $this->NivelEducativo->primaryKey => $id));
		$this->set('nivelEducativo', $this->NivelEducativo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NivelEducativo->create();
			if ($this->NivelEducativo->save($this->request->data)) {
				$this->Session->setFlash(__('The nivel educativo has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nivel educativo could not be saved. Please, try again.'), 'flash/error');
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
        $this->NivelEducativo->id = $id;
		if (!$this->NivelEducativo->exists($id)) {
			throw new NotFoundException(__('Invalid nivel educativo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->NivelEducativo->save($this->request->data)) {
				$this->Session->setFlash(__('The nivel educativo has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nivel educativo could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('NivelEducativo.' . $this->NivelEducativo->primaryKey => $id));
			$this->request->data = $this->NivelEducativo->find('first', $options);
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
		$this->NivelEducativo->id = $id;
		if (!$this->NivelEducativo->exists()) {
			throw new NotFoundException(__('Invalid nivel educativo'));
		}
		if ($this->NivelEducativo->delete()) {
			$this->Session->setFlash(__('Nivel educativo deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Nivel educativo was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
