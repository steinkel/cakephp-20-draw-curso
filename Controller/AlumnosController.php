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

    public function index(){
    	$this->set('alumnos',$this->Alumno->find('all'));
    }

    public function edit($id){
    	$this->Alumno->id = $id;
		if ($this->request->is('post')) {
			if ($this->Alumno->save($this->request->data)) {
				$this->Session->setFlash(__('El estudiante ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error al guardar'));
			}
		} else {
			$this->request->data = $this->Alumno->read(null, $id);
		}
		$this->set('focos', $this->Alumno->Foco->find('list'));
    }

    public function prueba(){
		$focos = $this->Alumno->Foco->find('list');
		$this->set('focos', $focos);
    }
}
