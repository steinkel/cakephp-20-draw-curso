<?php
App::uses('AppController', 'Controller');
/**
 * Ofertas Controller
 *
 * @property Oferta $Oferta
 */
class OfertasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Oferta->recursive = 0;
		$this->set('ofertas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Oferta->id = $id;
		if (!$this->Oferta->exists()) {
			throw new NotFoundException(__('Invalid oferta'));
		}
		$this->set('oferta', $this->Oferta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Oferta->create();
			if ($this->Oferta->save($this->request->data)) {
				$this->Session->setFlash(__('The oferta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oferta could not be saved. Please, try again.'));
			}
		}
		$empresas = $this->Oferta->Empresa->find('list');
		$focos = $this->Oferta->Foco->find('list');
		$this->set(compact('empresas', 'focos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Oferta->id = $id;
		if (!$this->Oferta->exists()) {
			throw new NotFoundException(__('Invalid oferta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Oferta->save($this->request->data)) {
				$this->Session->setFlash(__('The oferta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oferta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Oferta->read(null, $id);
		}
		$empresas = $this->Oferta->Empresa->find('list');
		$focos = $this->Oferta->Foco->find('list');
		$this->set(compact('empresas', 'focos'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Oferta->id = $id;
		if (!$this->Oferta->exists()) {
			throw new NotFoundException(__('Invalid oferta'));
		}
		if ($this->Oferta->delete()) {
			$this->Session->setFlash(__('Oferta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Oferta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
