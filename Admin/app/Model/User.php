<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Accounttype $Accounttype
 */
class User extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Accounttype' => array(
			'className' => 'Accounttype',
			'foreignKey' => 'accounttype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
