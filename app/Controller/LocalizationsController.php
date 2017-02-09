<?php
App::uses('AppController', 'Controller');
/**
 * Localizations Controller
 *
 * @property Localization $Localization
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class LocalizationsController extends AppController {

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
		$this->Localization->recursive = 0;
		$this->set('localizations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Localization->exists($id)) {
			throw new NotFoundException(__('Invalid localization'));
		}
		$options = array('conditions' => array('Localization.' . $this->Localization->primaryKey => $id));
		$this->set('localization', $this->Localization->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Localization->create();
			if ($this->Localization->save($this->request->data)) {
				$this->Session->setFlash(__('The localization has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The localization could not be saved. Please, try again.'), 'flash/error');
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
        $this->Localization->id = $id;
		if (!$this->Localization->exists($id)) {
			throw new NotFoundException(__('Invalid localization'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Localization->save($this->request->data)) {
				$this->Session->setFlash(__('The localization has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The localization could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Localization.' . $this->Localization->primaryKey => $id));
			$this->request->data = $this->Localization->find('first', $options);
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
		$this->Localization->id = $id;
		if (!$this->Localization->exists()) {
			throw new NotFoundException(__('Invalid localization'));
		}
		if ($this->Localization->delete()) {
			$this->Session->setFlash(__('Localization deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Localization was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
