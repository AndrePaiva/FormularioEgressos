<?php echo $this->Form->create('User');?>
<?php
	$sexo = array(
		'' => 'Selecione',
		'masculino' => 'Masculino',
		'feminino' => 'Feminino'
	);
	$sede = array(
		'' => 'Selecione',
		'centro' => 'Centro',
		'aldeota' => 'Aldeota'
	);
	$grau = array(
		'' => 'Selecione',
		'exaluno' => 'Ex-aluno',
		'pais' => 'Pais de Aluno'
	);
?>
    <fieldset>
        <legend><?php echo __('Novo usuário'); ?></legend>
        <?php
	        echo $this->Form->input('nome', array('label' => 'Nome Completo'));
	        echo $this->Form->input('sexo' , array('label' => 'Sexo', 'options' => $sexo));
	        echo $this->Form->input('username', array('label' => 'Email', 'type' => 'email'));
	        echo $this->Form->input('username_confirm', array('label' => 'Confirme seu Email', 'type' => 'email', 'value' =>''));
	        echo $this->Form->input('password', array('label' => 'Senha', 'value'=>''));
	        echo $this->Form->input('password_confirm',array('label' => 'Confirme sua Senha','value'=>'','type'=>'password'));
	        echo $this->Form->input('sede', array('label' =>'Selecione a Sede que você pertence', 'options' => $sede));
	        echo $this->Form->input('grau', array('label' =>'Selecione seu tipo de inscrição', 'options' => $grau));

    	?>

    </fieldset>
<?php echo $this->Form->end(__('Finalizar Cadastro'));?>