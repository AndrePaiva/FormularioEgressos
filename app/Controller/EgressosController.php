<?php
class EgressosController extends AppController {
	public $uses = array('Egresso');

	public function index() {
	}

	public function add() {
		if ($this->request->is('post')) {
            if ($this->Egresso->save($this->request->data)) {
                $this->Session->setFlash('Dados enviados com sucesso.');
                $this->redirect(array('controller' => 'pages', 'action' => 'display'));
            }
        }
	}
}
