<?php
App::uses('AppController', 'Controller');
/**
 * Focos Controller
 *
 */
class FocosController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public function index(){
    	$this->set('focos',$this->Foco->find('all'));
    }

    public function add(){
		if ($this->request->is('post')) {
			$this->Foco->create();
			if ($this->Foco->save($this->request->data)) {
				$this->Session->setFlash(__('El Foco se ha guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error al guardar'));
			}
		}
		$alumnos = $this->Foco->Alumno->find('list');
		$ofertas = $this->Foco->Oferta->find('list');
		$this->set(compact('ofertas', 'alumnos'));
    }

    public function view($id = null) {
		$this->Foco->id = $id;
		if (!$this->Foco->exists()) {
			throw new NotFoundException(__('No existe el Foco'));
		}
		$foco = $this->Foco->read(null, $id);
		$alumnos = $this->Foco->Alumno->find('list');
		$ofertas = $this->Foco->Oferta->find('list');
		$this->set(compact('foco','alumnos','ofertas'));
	}
}
