<?php
App::uses('Lien', 'Model');

/**
 * Lien Test Case
 *
 */
class LienTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lien',
		'app.utilisateurmenu',
		'app.utilisateur',
		'app.boncommande',
		'app.client',
		'app.timbre',
		'app.bonlivraison',
		'app.ligneclient',
		'app.ville',
		'app.pay',
		'app.devi',
		'app.lignedevi',
		'app.facture',
		'app.lignefacture',
		'app.lignebonlivraison',
		'app.reglement',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lien = ClassRegistry::init('Lien');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lien);

		parent::tearDown();
	}

}
