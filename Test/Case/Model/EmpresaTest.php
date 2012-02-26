<?php
/* Empresa Test cases generated on: 2012-02-26 18:03:36 : 1330275816*/
App::uses('Empresa', 'Model');

/**
 * Empresa Test Case
 *
 */
class EmpresaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.empresa', 'app.oferta', 'app.foco', 'app.alumno', 'app.alumnos_foco', 'app.focos_oferta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Empresa = ClassRegistry::init('Empresa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Empresa);

		parent::tearDown();
	}

}
