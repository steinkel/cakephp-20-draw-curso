<?php
/* Oferta Test cases generated on: 2012-02-26 18:02:53 : 1330275773*/
App::uses('Oferta', 'Model');

/**
 * Oferta Test Case
 *
 */
class OfertaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.oferta', 'app.empresa', 'app.foco', 'app.alumno', 'app.alumnos_foco', 'app.focos_oferta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Oferta = ClassRegistry::init('Oferta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Oferta);

		parent::tearDown();
	}

}
