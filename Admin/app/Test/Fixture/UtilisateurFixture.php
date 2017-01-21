<?php
/**
 * UtilisateurFixture
 *
 */
class UtilisateurFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'id_personnel' => array('type' => 'integer', 'null' => true, 'default' => null),
		'Type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Login' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Mot_pass' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'super' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'id_personnel' => 1,
			'Type' => 'Lorem ipsum dolor sit amet',
			'Login' => 'Lorem ipsum dolor ',
			'Mot_pass' => 'Lorem ipsum dolor ',
			'super' => 1
		),
	);

}
