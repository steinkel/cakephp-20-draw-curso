<?php
/* Foco Test cases generated on: 2012-02-25 22:27:14 : 1330205234*/
App::uses('Foco', 'Model');

/**
 * Foco Test Case
 *
 */
class FocoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.foco', 'app.alumno', 'app.alumnos_foco', 'app.oferta', 'app.focos_oferta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Foco = ClassRegistry::init('Foco');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Foco);

		parent::tearDown();
	}

}
