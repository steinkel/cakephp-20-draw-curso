<?php
/* Empresa Test cases generated on: 2012-02-25 22:27:22 : 1330205242*/
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
	public $fixtures = array('app.empresa');

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
