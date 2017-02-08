<?php
App::uses('AppController', 'Controller');
/**
 * TypeUltrasounds Controller
 *
 * @property TypeUltrasound $TypeUltrasound
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class TypeUltrasoundsController extends AppController {

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
		$this->TypeUltrasound->recursive = 0;
		$this->set('typeUltrasounds', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TypeUltrasound->exists($id)) {
			throw new NotFoundException(__('Invalid type ultrasound'));
		}
		$options = array('conditions' => array('TypeUltrasound.' . $this->TypeUltrasound->primaryKey => $id));
		$this->set('typeUltrasound', $this->TypeUltrasound->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TypeUltrasound->create();
			if ($this->TypeUltrasound->save($this->request->data)) {
				$this->Session->setFlash(__('The type ultrasound has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type ultrasound could not be saved. Please, try again.'), 'flash/error');
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
        $this->TypeUltrasound->id = $id;
		if (!$this->TypeUltrasound->exists($id)) {
			throw new NotFoundException(__('Invalid type ultrasound'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TypeUltrasound->save($this->request->data)) {
				$this->Session->setFlash(__('The type ultrasound has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type ultrasound could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('TypeUltrasound.' . $this->TypeUltrasound->primaryKey => $id));
			$this->request->data = $this->TypeUltrasound->find('first', $options);
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
		$this->TypeUltrasound->id = $id;
		if (!$this->TypeUltrasound->exists()) {
			throw new NotFoundException(__('Invalid type ultrasound'));
		}
		if ($this->TypeUltrasound->delete()) {
			$this->Session->setFlash(__('Type ultrasound deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Type ultrasound was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
