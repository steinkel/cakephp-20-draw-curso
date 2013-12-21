<?php
App::uses('AppController', 'Controller');
/**
 * Alumnos Controller
 *
 */
class AlumnosController extends AppController {

/**
* Scaffold
*
* @var mixed
*/
    public $scaffold;
	public $helper = array('Html');

	public function index(){
		$this->set('alumnos',$this->Alumno->find('all'));
	}
}
