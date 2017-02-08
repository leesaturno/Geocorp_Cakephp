<?php
App::uses('AppController', 'Controller');
/**
 * SituacionConyugals Controller
 *
 * @property SituacionConyugal $SituacionConyugal
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SituacionConyugalsController extends AppController {

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
		$this->SituacionConyugal->recursive = 0;
		$this->set('situacionConyugals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SituacionConyugal->exists($id)) {
			throw new NotFoundException(__('Invalid situacion conyugal'));
		}
		$options = array('conditions' => array('SituacionConyugal.' . $this->SituacionConyugal->primaryKey => $id));
		$this->set('situacionConyugal', $this->SituacionConyugal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SituacionConyugal->create();
			if ($this->SituacionConyugal->save($this->request->data)) {
				$this->Session->setFlash(__('The situacion conyugal has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The situacion conyugal could not be saved. Please, try again.'), 'flash/error');
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
        $this->SituacionConyugal->id = $id;
		if (!$this->SituacionConyugal->exists($id)) {
			throw new NotFoundException(__('Invalid situacion conyugal'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SituacionConyugal->save($this->request->data)) {
				$this->Session->setFlash(__('The situacion conyugal has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The situacion conyugal could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('SituacionConyugal.' . $this->SituacionConyugal->primaryKey => $id));
			$this->request->data = $this->SituacionConyugal->find('first', $options);
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
		$this->SituacionConyugal->id = $id;
		if (!$this->SituacionConyugal->exists()) {
			throw new NotFoundException(__('Invalid situacion conyugal'));
		}
		if ($this->SituacionConyugal->delete()) {
			$this->Session->setFlash(__('Situacion conyugal deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Situacion conyugal was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
