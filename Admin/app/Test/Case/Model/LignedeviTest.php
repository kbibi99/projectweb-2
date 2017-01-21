<?php
App::uses('Lignedevi', 'Model');

/**
 * Lignedevi Test Case
 *
 */
class LignedeviTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lignedevi',
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
		'app.lignefacture',
		'app.lignebonlivraison',
		'app.article',
		'app.famille',
		'app.reference',
		'app.modele',
		'app.couleur',
		'app.taille',
		'app.type',
		'app.lignecommande',
		'app.commande',
		'app.transferecommandebl',
		'app.transferedeviscommande',
		'app.ligneproduction',
		'app.stockdepot',
		'app.transfereblfacture',
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
		$this->Lignedevi = ClassRegistry::init('Lignedevi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lignedevi);

		parent::tearDown();
	}

}
