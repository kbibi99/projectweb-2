<?php
App::uses('Lignefacture', 'Model');

/**
 * Lignefacture Test Case
 *
 */
class LignefactureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lignefacture',
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
		'app.article',
		'app.famille',
		'app.reference',
		'app.modele',
		'app.couleur',
		'app.taille',
		'app.type',
		'app.lignebonlivraison',
		'app.transfereblfacture',
		'app.transferecommandebl',
		'app.lignecommande',
		'app.commande',
		'app.transferedeviscommande',
		'app.ligneproduction',
		'app.stockdepot',
		'app.utilisateurmenu',
		'app.menu',
		'app.lien',
		'app.reglement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lignefacture = ClassRegistry::init('Lignefacture');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lignefacture);

		parent::tearDown();
	}

}
