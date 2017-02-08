<?php
App::uses('AppController', 'Controller');
/**
 * Geolocations Controller
 *
 * @property Geolocation $Geolocation
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class GeolocationsController extends AppController {

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
		$this->Geolocation->recursive = 0;
		$this->set('geolocations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Geolocation->exists($id)) {
			throw new NotFoundException(__('Invalid geolocation'));
		}
		$options = array('conditions' => array('Geolocation.' . $this->Geolocation->primaryKey => $id));
		$this->set('geolocation', $this->Geolocation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Geolocation->create();
			if ($this->Geolocation->save($this->request->data)) {
				$this->Session->setFlash(__('The geolocation has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The geolocation could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$patients = $this->Geolocation->Patient->find('list');
		$this->set(compact('patients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Geolocation->id = $id;
		if (!$this->Geolocation->exists($id)) {
			throw new NotFoundException(__('Invalid geolocation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Geolocation->save($this->request->data)) {
				$this->Session->setFlash(__('The geolocation has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The geolocation could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Geolocation.' . $this->Geolocation->primaryKey => $id));
			$this->request->data = $this->Geolocation->find('first', $options);
		}
		$patients = $this->Geolocation->Patient->find('list');
		$this->set(compact('patients'));
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
		$this->Geolocation->id = $id;
		if (!$this->Geolocation->exists()) {
			throw new NotFoundException(__('Invalid geolocation'));
		}
		if ($this->Geolocation->delete()) {
			$this->Session->setFlash(__('Geolocation deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Geolocation was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
