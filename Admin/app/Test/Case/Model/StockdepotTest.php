<?php
App::uses('Stockdepot', 'Model');

/**
 * Stockdepot Test Case
 *
 */
class StockdepotTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.stockdepot',
		'app.depot',
		'app.mouvementstock',
		'app.ligneproduction',
		'app.production',
		'app.article',
		'app.famille',
		'app.reference',
		'app.modele',
		'app.couleur',
		'app.taille',
		'app.type',
		'app.lignebonlivraison',
		'app.bonlivraison',
		'app.client',
		'app.timbre',
		'app.boncommande',
		'app.utilisateur',
		'app.devi',
		'app.ligneclient',
		'app.ville',
		'app.pay',
		'app.facture',
		'app.lignefacture',
		'app.transfereblfacture',
		'app.lignedevi',
		'app.transferedeviscommande',
		'app.utilisateurmenu',
		'app.menu',
		'app.lien',
		'app.reglement',
		'app.lignereglement',
		'app.piecereglement',
		'app.paiement',
		'app.transferecommandebl',
		'app.lignecommande',
		'app.commande',
		'app.personnel',
		'app.ligneligneproduction'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Stockdepot = ClassRegistry::init('Stockdepot');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Stockdepot);

		parent::tearDown();
	}

}
