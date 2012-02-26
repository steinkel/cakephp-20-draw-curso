<?php
/* Oferta Fixture generated on: 2012-02-25 22:27:18 : 1330205238 */

/**
 * OfertaFixture
 *
 */
class OfertaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'titulo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'activa' => array('type' => 'boolean', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'vacantes' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => NULL, 'comment' => ''),
		'fecha_limite' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '4f495236-def8-4a62-87ce-31777f000001',
			'titulo' => 'Lorem ipsum dolor sit amet',
			'activa' => 1,
			'created' => '2012-02-25 22:27:18',
			'modified' => '2012-02-25 22:27:18',
			'vacantes' => 1,
			'fecha_limite' => '2012-02-25'
		),
	);
}
