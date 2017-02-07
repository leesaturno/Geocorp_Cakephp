<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

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
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function login(){
				 if ($this->request->is('post')){
					 if ($this->Auth->login()) {
						 return $this->redirect($this->Auth->redirectUrl());
					 }
					 $this->Session->setFlash('Correo y/o Contraseña invalidos', 'default', array('class'=> 'alert alert-danger'));
				 }
				}
				public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}

	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

public function home(){

	$this->render();
}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$rols = $this->User->Rol->find('list');
		$this->set(compact('rols'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->User->id = $id;
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$rols = $this->User->Rol->find('list');
		$this->set(compact('rols'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	function database_mysql_dump($tables = '*') {

		    $return = '';

		    $modelName = $this->modelClass;

		    $dataSource = $this->{$modelName}->getDataSource();
		    $databaseName = $dataSource->getSchemaName();


		    // Realizar un Header
		    $return .= '-- Database: `' . $databaseName . '`' . "\n";
		    $return .= '-- Generation time: ' . date('D jS M Y H:i:s') . "\n\n\n";


		    if ($tables == '*') {
		        $tables = array();
		        $result = $this->{$modelName}->query('SHOW TABLES');
		        foreach($result as $resultKey => $resultValue){
		            $tables[] = current($resultValue['TABLE_NAMES']);
		        }
		    } else {
		        $tables = is_array($tables) ? $tables : explode(',', $tables);
		    }

		    // Recorrer todas las Tablas
		    foreach ($tables as $table) {
		        $tableData = $this->{$modelName}->query('SELECT * FROM ' . $table);

		        $return .= 'DROP TABLE IF EXISTS ' . $table . ';';
		        $createTableResult = $this->{$modelName}->query('SHOW CREATE TABLE ' . $table);
		        $createTableEntry = current(current($createTableResult));
		        $return .= "\n\n" . $createTableEntry['Create Table'] . ";\n\n";

		        // Ingresando datos de las tablas 
		        foreach($tableData as $tableDataIndex => $tableDataDetails) {

		            $return .= 'INSERT INTO ' . $table . ' VALUES(';

		            foreach($tableDataDetails[$table] as $dataKey => $dataValue) {

		                if(is_null($dataValue)){
		                    $escapedDataValue = 'NULL';
		                }
		                else {
		                    // Codiiacno
		                    $escapedDataValue = mb_convert_encoding( $dataValue, "UTF-8", "ISO-8859-1" );
		                    $escapedDataValue = $this->{$modelName}->getDataSource()->value($escapedDataValue);
		                }

		                $tableDataDetails[$table][$dataKey] = $escapedDataValue;
		            }
		            $return .= implode(',', $tableDataDetails[$table]);

		            $return .= ");\n";
		        }

		        $return .= "\n\n\n";
		    }

		    // Colocar el Nombre
		    $fileName = $databaseName . '-Respaldo-' . date('Y-m-d_H-i-s') . '.sql';

		    // Y por Ultimo colocarlo para descargar
		    $this->autoRender = false;
		    $this->response->type('Content-Type: text/x-sql');
		    $this->response->download($fileName);
		    $this->response->body($return);
		}


}
