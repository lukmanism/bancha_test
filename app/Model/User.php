<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property campaign $reports
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';
    public $actsAs = array("Bancha.BanchaRemotable");

/**
 * Validation rules
 *
 * @var array
 */
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        ),
        'reports' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasMany = array(
		'reports' => array(
			'className' => 'Campaign',
			'foreignKey' => 'reports',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
