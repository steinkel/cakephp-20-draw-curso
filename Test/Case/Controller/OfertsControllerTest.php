<?php
/* Oferts Test cases generated on: 2012-02-25 22:27:38 : 1330205258*/
App::uses('OfertsController', 'Controller');

/**
 * TestOfertsController *
 */
class TestOfertsController extends OfertsController {
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
 * OfertsController Test Case
 *
 */
class OfertsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ofert');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Oferts = new TestOfertsController();
		$this->Oferts->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Oferts);

		parent::tearDown();
	}

}
