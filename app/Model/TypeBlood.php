<?php
App::uses('AppModel', 'Model');
/**
 * TypeBlood Model
 *
 */
class TypeBlood extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $virtualFields = array(
    'name' => 'CONCAT(TypeBlood.descripcion, " ", TypeBlood.factor_rh)'
); 
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'descripcion' => array(
			'postal' => array(
				'rule' => array('postal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'factor_rh' => array(
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
