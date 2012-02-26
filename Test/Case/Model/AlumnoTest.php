<?php
/* Alumno Test cases generated on: 2012-02-25 22:21:12 : 1330204872*/
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
	public $fixtures = array('app.alumno', 'app.foco', 'app.alumnos_foco');

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
