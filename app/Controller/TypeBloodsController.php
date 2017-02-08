<?php
App::uses('AppController', 'Controller');
/**
 * TypeBloods Controller
 *
 * @property TypeBlood $TypeBlood
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class TypeBloodsController extends AppController {

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
		$this->TypeBlood->recursive = 0;
		$this->set('typeBloods', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TypeBlood->exists($id)) {
			throw new NotFoundException(__('Invalid type blood'));
		}
		$options = array('conditions' => array('TypeBlood.' . $this->TypeBlood->primaryKey => $id));
		$this->set('typeBlood', $this->TypeBlood->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TypeBlood->create();
			if ($this->TypeBlood->save($this->request->data)) {
				$this->Session->setFlash(__('The type blood has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type blood could not be saved. Please, try again.'), 'flash/error');
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
        $this->TypeBlood->id = $id;
		if (!$this->TypeBlood->exists($id)) {
			throw new NotFoundException(__('Invalid type blood'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TypeBlood->save($this->request->data)) {
				$this->Session->setFlash(__('The type blood has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type blood could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('TypeBlood.' . $this->TypeBlood->primaryKey => $id));
			$this->request->data = $this->TypeBlood->find('first', $options);
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
		$this->TypeBlood->id = $id;
		if (!$this->TypeBlood->exists()) {
			throw new NotFoundException(__('Invalid type blood'));
		}
		if ($this->TypeBlood->delete()) {
			$this->Session->setFlash(__('Type blood deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Type blood was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
