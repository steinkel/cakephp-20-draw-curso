<?php
/* Focos Test cases generated on: 2012-02-25 22:27:31 : 1330205251*/
App::uses('FocosController', 'Controller');

/**
 * TestFocosController *
 */
class TestFocosController extends FocosController {
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
 * FocosController Test Case
 *
 */
class FocosControllerTestCase extends CakeTestCase {
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

		$this->Focos = new TestFocosController();
		$this->Focos->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Focos);

		parent::tearDown();
	}

}
