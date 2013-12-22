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

    public function edit($id = null) {
		$this->Alumno->id = $id;
		if (!$this->Alumno->exists()) {
			throw new NotFoundException(__('No existe el Alumno'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Alumno->save($this->request->data)) {
				$this->Session->setFlash(__('El estudiante ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error al guardar'));
				$this->redirect(array('action' => 'edit', $this->Alumno->id));
			}
		} else {
			$this->request->data = $this->Alumno->read(null, $id);
		}
		$this->set('focos', $this->Alumno->Foco->find('list'));
	}

    public function view($id = null) {
		$this->Alumno->id = $id;
		if (!$this->Alumno->exists()) {
			throw new NotFoundException(__('No existe el Estudiante'));
		}
		$alumno = $this->Alumno->read(null, $id);
		$focos = $this->Alumno->Foco->find('list');
		$this->set(compact('focos','alumno'));
	}
}
