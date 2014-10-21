<?php

class UsersController extends AppController {

	public $helpers = array ('Html','Form');
	public $uses = array('User');

	public function index() {
		
	}

	public function validar_dados_aluno() {
		
	}

	public function validar_dados_func() {
		
	}

	public function controle_aluno() {

	}

	public function login($mensagem=null) {
        if(isset($mensagem) and $mensagem != null) {
            $this->Session->setFlash(__($mensagem));
        }
	}

    public function controle_cpf() {

    }

    public function formulario() {
    	$this->redirect(array('controller' => 'pages', 'action' => 'display'));
    }

    public function erro() {
    	$this->Session->setFlash(__('Dados não conferem com o sistema.'));
    }


    public function beforeFilter() {
        $this->Auth->allow('erro', 'login', 'controle_cpf');
        $this->Auth->authError = "Você não está autorizado para esta ação.";
    }

}
