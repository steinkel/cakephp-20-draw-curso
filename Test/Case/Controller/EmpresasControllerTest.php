<?php
/* Empresas Test cases generated on: 2012-02-26 18:03:41 : 1330275821*/
App::uses('EmpresasController', 'Controller');

/**
 * TestEmpresasController *
 */
class TestEmpresasController extends EmpresasController {
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
 * EmpresasController Test Case
 *
 */
class EmpresasControllerTestCase extends CakeTestCase {
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

		$this->Empresas = new TestEmpresasController();
		$this->Empresas->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Empresas);

		parent::tearDown();
	}

}
