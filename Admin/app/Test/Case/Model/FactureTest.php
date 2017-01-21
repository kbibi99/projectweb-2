<?php
App::uses('Facture', 'Model');

/**
 * Facture Test Case
 *
 */
class FactureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.facture',
		'app.client',
		'app.timbre',
		'app.boncommande',
		'app.utilisateur',
		'app.bonlivraison',
		'app.ligneclient',
		'app.ville',
		'app.pay',
		'app.devi',
		'app.lignedevi',
		'app.lignebonlivraison',
		'app.utilisateurmenu',
		'app.menu',
		'app.lien',
		'app.reglement',
		'app.lignefacture'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Facture = ClassRegistry::init('Facture');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Facture);

		parent::tearDown();
	}

}
