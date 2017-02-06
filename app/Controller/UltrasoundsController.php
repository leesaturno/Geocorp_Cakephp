<?php
App::uses('AppController', 'Controller');
/**
 * Ultrasounds Controller
 *
 * @property Ultrasound $Ultrasound
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UltrasoundsController extends AppController {

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
		$this->Ultrasound->recursive = 0;
		$this->set('ultrasounds', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ultrasound->exists($id)) {
			throw new NotFoundException(__('Invalid ultrasound'));
		}
		$options = array('conditions' => array('Ultrasound.' . $this->Ultrasound->primaryKey => $id));
		$this->set('ultrasound', $this->Ultrasound->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ultrasound->create();
			if ($this->Ultrasound->save($this->request->data)) {
				$this->Session->setFlash(__('The ultrasound has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ultrasound could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$typeUltrasounds = $this->Ultrasound->TypeUltrasound->find('list');
		$patients = $this->Ultrasound->Patient->find('list');
		$this->set(compact('typeUltrasounds', 'patients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Ultrasound->id = $id;
		if (!$this->Ultrasound->exists($id)) {
			throw new NotFoundException(__('Invalid ultrasound'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ultrasound->save($this->request->data)) {
				$this->Session->setFlash(__('The ultrasound has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ultrasound could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Ultrasound.' . $this->Ultrasound->primaryKey => $id));
			$this->request->data = $this->Ultrasound->find('first', $options);
		}
		$typeUltrasounds = $this->Ultrasound->TypeUltrasound->find('list');
		$patients = $this->Ultrasound->Patient->find('list');
		$this->set(compact('typeUltrasounds', 'patients'));
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
		$this->Ultrasound->id = $id;
		if (!$this->Ultrasound->exists()) {
			throw new NotFoundException(__('Invalid ultrasound'));
		}
		if ($this->Ultrasound->delete()) {
			$this->Session->setFlash(__('Ultrasound deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ultrasound was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
