<?php
App::uses('Bonlivraison', 'Model');

/**
 * Bonlivraison Test Case
 *
 */
class BonlivraisonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bonlivraison',
		'app.client',
		'app.timbre',
		'app.boncommande',
		'app.utilisateur',
		'app.devi',
		'app.facture',
		'app.utilisateurmenu',
		'app.menu',
		'app.lien',
		'app.ligneclient',
		'app.ville',
		'app.pay',
		'app.reglement',
		'app.lignebonlivraison'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bonlivraison = ClassRegistry::init('Bonlivraison');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bonlivraison);

		parent::tearDown();
	}

}
