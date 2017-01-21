<?php
App::uses('Lignecommande', 'Model');

/**
 * Lignecommande Test Case
 *
 */
class LignecommandeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lignecommande',
		'app.commande',
		'app.article',
		'app.famille',
		'app.reference',
		'app.modele',
		'app.couleur',
		'app.taille',
		'app.type',
		'app.lignebonlivraison',
		'app.lignedevi',
		'app.lignefacture',
		'app.ligneproduction',
		'app.stockdepot',
		'app.transferecommandebl',
		'app.transferedeviscommande'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lignecommande = ClassRegistry::init('Lignecommande');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lignecommande);

		parent::tearDown();
	}

}
