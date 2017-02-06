<?php
App::uses('AppModel', 'Model');
/**
 * Comun Model
 *
 * @property Patient $Patient
 */
class Comun extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descripci';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'descripci' => array(
			'postal' => array(
				'rule' => array('postal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Patient' => array(
			'className' => 'Patient',
			'foreignKey' => 'comun_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
