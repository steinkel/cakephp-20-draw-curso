<?php
App::uses('AppController', 'Controller');
/**
 * Empresas Controller
 *
 */
class EmpresasController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public function index(){
    	$this->set('empresas',$this->Empresa->find('all'));
    }

    public function add(){
    	if ($this->request->is('post')) {
			$this->Empresa->create();
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('La Empresa ha sido creada'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error al guardar'));
			}
		}
    }

    public function edit($id = null) {
		$this->Empresa->id = $id;
		if (!$this->Empresa->exists()) {
			throw new NotFoundException(__('No existe la Empresa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('La Empresa ha sido guardada'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error al guardar'));
			}
		} else {
			$this->request->data = $this->Empresa->read(null, $id);
		}
	}

    public function view($id = null) {
		$this->Empresa->id = $id;
		if (!$this->Empresa->exists()) {
			throw new NotFoundException(__('No existe la Empresa'));
		}
		$empresa = $this->Empresa->read(null, $id);
		$ofertas = $this->Empresa->Oferta->find('list');
		$this->set(compact('empresa','ofertas'));
	}
}
