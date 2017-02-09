<?php
App::uses('AppModel', 'Model');
/**
 * Specialty Model
 *
 */
class Specialty extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $virtualField(){
		  'name' => 'CONCAT(Specialty.descripcion)'
	}
	public $displayField = 'descripcion';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'descripcion' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
