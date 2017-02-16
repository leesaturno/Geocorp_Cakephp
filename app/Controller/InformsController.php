<?php
App::uses('AppController', 'Controller');
/**
 * Informs Controller
 *
 * @property Inform $Inform
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class InformsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session','RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Inform->recursive = 0;
		$this->set('informs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {

		
	if (!$this->Inform->exists($id)) {
			throw new NotFoundException(__('Invalid doctor'));
		}
			
			

		$options = array('conditions' => array('Inform.' . $this->Inform->primaryKey => $id));
	$this->pdfConfig = array(
	'download' => true,
	'filename' => 'Inform_' . $id .'.pdf'
);
	
    $this->response->type('application/pdf');
		$this->set('inform', $this->Inform->find('first', $options));
	}
			 
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Inform->create();
			if ($this->Inform->save($this->request->data)) {
				$this->Session->setFlash(__('The inform has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inform could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$patients = $this->Inform->Patient->find('list');
		$medicamentos = $this->Inform->Medicamentos->find('list');
		$doctors = $this->Inform->Doctor->find('list');
		$this->set(compact('patients', 'doctors', 'medicamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Inform->id = $id;
		if (!$this->Inform->exists($id)) {
			throw new NotFoundException(__('Invalid inform'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Inform->save($this->request->data)) {
				$this->Session->setFlash(__('The inform has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inform could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Inform.' . $this->Inform->primaryKey => $id));
			$this->request->data = $this->Inform->find('first', $options);
		}
		$patients = $this->Inform->Patient->find('list');
		$doctors = $this->Inform->Doctor->find('list');
		$this->set(compact('patients', 'doctors'));
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
		$this->Inform->id = $id;
		if (!$this->Inform->exists()) {
			throw new NotFoundException(__('Invalid inform'));
		}
		if ($this->Inform->delete()) {
			$this->Session->setFlash(__('Inform deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Inform was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
