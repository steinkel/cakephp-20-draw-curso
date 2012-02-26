<?php
/* Alumno Test cases generated on: 2012-02-26 18:34:48 : 1330277688*/
App::uses('Alumno', 'Model');

/**
 * Alumno Test Case
 *
 */
class AlumnoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.alumno', 'app.foco', 'app.alumnos_foco', 'app.oferta', 'app.empresa', 'app.focos_oferta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Alumno = ClassRegistry::init('Alumno');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alumno);

		parent::tearDown();
	}

}
