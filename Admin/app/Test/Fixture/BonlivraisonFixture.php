<?php
/**
 * BonlivraisonFixture
 *
 */
class BonlivraisonFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'Numero' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'client_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'Date' => array('type' => 'date', 'null' => false, 'default' => '0000-00-00'),
		'Total_HT' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '18,3'),
		'Remise' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '8,3'),
		'Tva' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '8,3'),
		'Total_TTC' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '18,3'),
		'Montant_Regler' => array('type' => 'float', 'null' => true, 'default' => '0.000', 'length' => '18,3'),
		'timbre_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'utilisateur_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ligneclient_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 0)
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
			'Numero' => 'Lorem ipsum dolor ',
			'client_id' => 1,
			'Date' => '2014-11-06',
			'Total_HT' => 1,
			'Remise' => 1,
			'Tva' => 1,
			'Total_TTC' => 1,
			'Montant_Regler' => 1,
			'timbre_id' => 1,
			'utilisateur_id' => 1,
			'ligneclient_id' => 1
		),
	);

}
