<?php
App::uses('AppController', 'Controller');
/**
 * Specialties Controller
 *
 * @property Specialty $Specialty
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SpecialtiesController extends AppController {

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
		$this->Specialty->recursive = 0;
		$this->set('specialties', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Specialty->exists($id)) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		$options = array('conditions' => array('Specialty.' . $this->Specialty->primaryKey => $id));
		$this->set('specialty', $this->Specialty->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Specialty->create();
			if ($this->Specialty->save($this->request->data)) {
				$this->Session->setFlash(__('The specialty has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specialty could not be saved. Please, try again.'), 'flash/error');
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
        $this->Specialty->id = $id;
		if (!$this->Specialty->exists($id)) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Specialty->save($this->request->data)) {
				$this->Session->setFlash(__('The specialty has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specialty could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Specialty.' . $this->Specialty->primaryKey => $id));
			$this->request->data = $this->Specialty->find('first', $options);
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
		$this->Specialty->id = $id;
		if (!$this->Specialty->exists()) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		if ($this->Specialty->delete()) {
			$this->Session->setFlash(__('Specialty deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Specialty was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
