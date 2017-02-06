<?php
App::uses('AppModel', 'Model');
/**
 * Ultrasound Model
 *
 * @property TypeUltrasound $TypeUltrasound
 * @property Patient $Patient
 */
class Ultrasound extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descripcion';

	public $actsAs = array( 
			'Upload.Upload' => array(
					'foto' => array(
						'fields' => array(
							'dir' => 'foto_dir'

							 ),
							'thumbnailMethod' => 'php',
							'thumbnaiLSizes'  => array(
								'vga' => '640x480',
								'thumb' => '150x150'

							),
							'deleteOnUpdate' => true,
							'deleteFolderOnDelete' => true
						)
				)
		);
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'type_ultrasound_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'patient_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TypeUltrasound' => array(
			'className' => 'TypeUltrasound',
			'foreignKey' => 'type_ultrasound_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Patient' => array(
			'className' => 'Patient',
			'foreignKey' => 'patient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
