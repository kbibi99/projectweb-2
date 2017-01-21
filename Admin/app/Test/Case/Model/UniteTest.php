<?php
App::uses('Unite', 'Model');

/**
 * Unite Test Case
 *
 */
class UniteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.unite',
		'app.matierepremiere',
		'app.type',
		'app.article',
		'app.famille',
		'app.lignecollection',
		'app.collection',
		'app.boncommande',
		'app.client',
		'app.timbre',
		'app.bonlivraison',
		'app.utilisateur',
		'app.devi',
		'app.ligneclient',
		'app.ville',
		'app.pay',
		'app.facture',
		'app.lignefacture',
		'app.transfereblfacture',
		'app.lignebonlivraison',
		'app.transferecommandebl',
		'app.lignecommande',
		'app.transferedeviscommande',
		'app.lignedevi',
		'app.inventaire',
		'app.depot',
		'app.mouvementstock',
		'app.ligneproduction',
		'app.production',
		'app.personnel',
		'app.ligneligneproduction',
		'app.stockdepot',
		'app.ligneinventaire',
		'app.utilisateurmenu',
		'app.menu',
		'app.lien',
		'app.reglement',
		'app.lignereglement',
		'app.piecereglement',
		'app.paiement',
		'app.lignelignecollection',
		'app.modele',
		'app.couleur',
		'app.taille',
		'app.lineinventory',
		'app.mpfournisseur',
		'app.stockmatierepremiere'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Unite = ClassRegistry::init('Unite');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Unite);

		parent::tearDown();
	}

}
