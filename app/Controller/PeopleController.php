<?php
App::uses('AppController', 'Controller');
/**
 * People Controller
 *
 * @property Person $Person
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PeopleController extends AppController {

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
		$this->Person->recursive = 0;
		$this->set('people', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Invalid person'));
		}
		$options = array('conditions' => array('Person.' . $this->Person->primaryKey => $id));
		$this->set('person', $this->Person->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Person->create();
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('The person has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'), 'flash/error');
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
        $this->Person->id = $id;
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('The person has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Person.' . $this->Person->primaryKey => $id));
			$this->request->data = $this->Person->find('first', $options);
		}
	}


	public function addAjax() {
		if ($this->request->is('ajax')) {
		    
		    $data = [
			'title' => 'Panel de Control',
			'content' => '<div class=""> <div class="col-xs-12"><div class="box box-primary"><div class="box-header"><h3 class="box-title">Nueva Persona</h3></div><div class="box-body table-responsive"><form action="/Geocorp_Cakephp_2.7-/people/add" role="form" id="PersonAddForm" method="post" accept-charset="utf-8"><div style="display:none;"><input name="_method" value="POST" type="hidden"></div><fieldset><div class="col-md-3"><div class="form-group"><div class="input text required"><label for="PersonNacionalidad">Nacionalidad</label><input name="data[Person][nacionalidad]" class="form-control" maxlength="100" id="PersonNacionalidad" required="required" type="text"></div></div></div><div class="col-md-3"><div class="form-group"><div class="input number required"><label for="PersonCedula">Cedula</label><input name="data[Person][cedula]" class="form-control" id="PersonCedula" required="required" type="number"></div></div></div><div class="col-md-3"><div class="form-group"><div class="input text required"><label for="PersonNombre">Primer Nombre</label><input name="data[Person][nombre]" class="form-control" maxlength="100" id="PersonNombre" required="required" type="text"></div></div></div><div class="col-md-3"><div class="form-group"><div class="input text required"><label for="PersonNombre2">Segundo Nombre</label><input name="data[Person][nombre2]" class="form-control" maxlength="100" id="PersonNombre2" required="required" type="text"></div></div></div><div class="col-md-3"><div class="form-group"><div class="input text required"><label for="PersonApellido">Primer Apellido</label><input name="data[Person][apellido]" class="form-control" maxlength="100" id="PersonApellido" required="required" type="text"></div></div></div><div class="col-md-3"><div class="form-group"><div class="input text required"><label for="PersonApellido2">Segundo Apellido</label><input name="data[Person][apellido2]" class="form-control" maxlength="100" id="PersonApellido2" required="required" type="text"></div></div></div><div class="col-md-3"><div class="form-group"><div class="input text required"><label for="PersonTelefono">Telefono de un familiar</label><input name="data[Person][telefono]" class="form-control" maxlength="100" id="PersonTelefono" required="required" type="text"></div></div></div><div class="col-md-3"><div class="form-group"><div class="input text required"><label for="PersonTelefonoHabitacion">Telefono de Habitación</label><input name="data[Person][telefono_habitacion]" class="form-control" maxlength="100" id="PersonTelefonoHabitacion" required="required" type="text"></div></div></div><div class="col-md-3"><div class="form-group"><div class="input text required"><label for="PersonTelefonoMovil">Celular</label><input name="data[Person][telefono_movil]" class="form-control" maxlength="100" id="PersonTelefonoMovil" required="required" type="text"></div></div></div><div class="col-md-3"><div class="form-group"><div class="input email required"><label for="PersonCorreo">Correo Electronico</label><input name="data[Person][correo]" class="form-control" maxlength="100" id="PersonCorreo" required="required" type="email"></div></div></div><div class="col-md-3"><div class="form-group"><div class="input text required"><label for="PersonFechaNac">Fecha de nacimiento</label><input name="data[Person][fecha_nac]" class="form-control" id="PersonFechaNac" required="required" type="text"></div></div></div><div class="col-md-3"><div class="form-group"><div class="input text required"><label for="PersonFechaDefuncio">Fecha de defunción</label><input name="data[Person][fecha_defuncio]" class="form-control" id="PersonFechaDefuncio" required="required" type="text"></div></div></div><div class="col-md-6"><div class="form-group"><div class="input textArea required" label for="PersonDireccion">Dirección</label><textarea name="data[Person][direccion]" class="form-control" id="PersonDireccion" required="required" style="resize:none;" ></textarea></div></div></div></fieldset><div class="submit"><input class="btn btn-large btn-primary" value="Guardar" type="submit"></div></form></div></div></div></div>',
			];


		   
 		$this->autoRender= false;

		return json_encode($data);
		
		} 

	}
	public function setAjax(){
		if ($this->request->is('post', 'ajax')) {
			$this->autoRender= false;
			if ($this->Person->save($this->request->data)) {
				return true;	
			} 
			else{
				return false;
			}
			
		}
	}
}
