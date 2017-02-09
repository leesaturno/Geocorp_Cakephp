<?php
App::uses('AppController', 'Controller');
/**
 * Patients Controller
 *
 * @property Patient $Patient
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PatientsController extends AppController {

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
		$this->Patient->recursive = 0;
		$this->set('patients', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Patient->exists($id)) {
			throw new NotFoundException(__('Invalid patient'));
		}
		$options = array('conditions' => array('Patient.' . $this->Patient->primaryKey => $id));
		$this->set('patient', $this->Patient->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Patient->create();
			if ($this->Patient->save($this->request->data)) {
				$this->Session->setFlash(__('The patient has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patient could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$etnias = $this->Patient->Etnia->find('list');
		$people = $this->Patient->Person->find('list');
		$countries = $this->Patient->Country->find('list');
		$municipios = $this->Patient->Municipio->find('list');
		$parroquias = $this->Patient->Parroquia->find('list');
		$typeBloods = $this->Patient->TypeBlood->find('list');
		
		$ocupacions = $this->Patient->Ocupacion->find('list');
		$this->set(compact('etnias', 'people', 'countries', 'municipios', 'parroquias', 'typeBloods', 'ocupacions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Patient->id = $id;
		if (!$this->Patient->exists($id)) {
			throw new NotFoundException(__('Invalid patient'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Patient->save($this->request->data)) {
				$this->Session->setFlash(__('The patient has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patient could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Patient.' . $this->Patient->primaryKey => $id));
			$this->request->data = $this->Patient->find('first', $options);
		}
		$etnias = $this->Patient->Etnia->find('list');
		$people = $this->Patient->Person->find('list');
		$countries = $this->Patient->Country->find('list');
		$municipios = $this->Patient->Municipio->find('list');
		$parroquias = $this->Patient->Parroquia->find('list');
		$typeBloods = $this->Patient->TypeBlood->find('list');
		
		$ocupacions = $this->Patient->Ocupacion->find('list');
		$this->set(compact('etnias', 'people', 'countries', 'municipios', 'parroquias', 'typeBloods', 'ocupacions'));
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
		$this->Patient->id = $id;
		if (!$this->Patient->exists()) {
			throw new NotFoundException(__('Invalid patient'));
		}
		if ($this->Patient->delete()) {
			$this->Session->setFlash(__('Patient deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Patient was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}

	/*public function searchjson()
	{
		$term = null;
		if(!empty($this->request->query['term']))
		{
			$term = $this->request->query['term'];
			$terms = explode('', thim($term));
			$terms = array_diff($terms, array)(''));
			foreach ($terms as $term) 
			{
				$conditions[] = array('el.patient.person.nombre LIKE' => '%' .$term . '%' );
			}

			$patient = $this->Patient->find('all',array ('recursive' => -1, 'fields' => array('patient.id', 'patient.person.nombre'), 'conditions' => $conditions, 'limit' => 20));
		}
		echo json_encode($patient);
	}*/
}
