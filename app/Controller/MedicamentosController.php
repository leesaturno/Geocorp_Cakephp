<?php
App::uses('AppController', 'Controller');
/**
 * Medicamentos Controller
 *
 * @property Medicamento $Medicamento
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MedicamentosController extends AppController {

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
		$this->Medicamento->recursive = 0;
		$this->set('medicamentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Medicamento->exists($id)) {
			throw new NotFoundException(__('Invalid medicamento'));
		}
		$options = array('conditions' => array('Medicamento.' . $this->Medicamento->primaryKey => $id));
		$this->set('medicamento', $this->Medicamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Medicamento->create();
			if ($this->Medicamento->save($this->request->data)) {
				$this->Session->setFlash(__('The medicamento has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medicamento could not be saved. Please, try again.'), 'flash/error');
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
        $this->Medicamento->id = $id;
		if (!$this->Medicamento->exists($id)) {
			throw new NotFoundException(__('Invalid medicamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Medicamento->save($this->request->data)) {
				$this->Session->setFlash(__('The medicamento has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medicamento could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Medicamento.' . $this->Medicamento->primaryKey => $id));
			$this->request->data = $this->Medicamento->find('first', $options);
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
		$this->Medicamento->id = $id;
		if (!$this->Medicamento->exists()) {
			throw new NotFoundException(__('Invalid medicamento'));
		}
		if ($this->Medicamento->delete()) {
			$this->Session->setFlash(__('Medicamento deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Medicamento was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
