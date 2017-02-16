<?php
App::uses('AppController', 'Controller');
/**
 * Medicaments Controller
 *
 * @property Medicament $Medicament
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MedicamentsController extends AppController {

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
		$this->Medicament->recursive = 0;
		$this->set('medicaments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Medicament->exists($id)) {
			throw new NotFoundException(__('Invalid medicament'));
		}
		$options = array('conditions' => array('Medicament.' . $this->Medicament->primaryKey => $id));
		$this->set('medicament', $this->Medicament->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Medicament->create();
			if ($this->Medicament->save($this->request->data)) {
				$this->Session->setFlash(__('The medicament has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medicament could not be saved. Please, try again.'), 'flash/error');
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
        $this->Medicament->id = $id;
		if (!$this->Medicament->exists($id)) {
			throw new NotFoundException(__('Invalid medicament'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Medicament->save($this->request->data)) {
				$this->Session->setFlash(__('The medicament has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medicament could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Medicament.' . $this->Medicament->primaryKey => $id));
			$this->request->data = $this->Medicament->find('first', $options);
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
		$this->Medicament->id = $id;
		if (!$this->Medicament->exists()) {
			throw new NotFoundException(__('Invalid medicament'));
		}
		if ($this->Medicament->delete()) {
			$this->Session->setFlash(__('Medicament deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Medicament was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
