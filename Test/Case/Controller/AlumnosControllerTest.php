<?php
/* Alumnos Test cases generated on: 2012-02-25 22:21:37 : 1330204897*/
App::uses('AlumnosController', 'Controller');

/**
 * TestAlumnosController *
 */
class TestAlumnosController extends AlumnosController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * AlumnosController Test Case
 *
 */
class AlumnosControllerTestCase extends CakeTestCase {
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

		$this->Alumnos = new TestAlumnosController();
		$this->Alumnos->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alumnos);

		parent::tearDown();
	}

}
