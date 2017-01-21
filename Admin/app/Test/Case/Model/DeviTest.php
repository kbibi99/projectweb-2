<?php
App::uses('Devi', 'Model');

/**
 * Devi Test Case
 *
 */
class DeviTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.devi',
		'app.client',
		'app.timbre',
		'app.boncommande',
		'app.utilisateur',
		'app.bonlivraison',
		'app.ligneclient',
		'app.ville',
		'app.pay',
		'app.facture',
		'app.lignebonlivraison',
		'app.utilisateurmenu',
		'app.menu',
		'app.lien',
		'app.reglement',
		'app.lignedevi'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Devi = ClassRegistry::init('Devi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Devi);

		parent::tearDown();
	}

}
