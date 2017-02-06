<?php
App::uses('AppModel', 'Model');
/**
 * TypeUltrasound Model
 *
 * @property Ultrasound $Ultrasound
 */
class TypeUltrasound extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descripcion';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Ultrasound' => array(
			'className' => 'Ultrasound',
			'foreignKey' => 'type_ultrasound_id',
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
