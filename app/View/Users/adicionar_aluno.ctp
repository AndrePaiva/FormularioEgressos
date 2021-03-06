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
		'5_serie' => '5ª ano do fundamental',
		'6_serie' => '6ª ano do fundamental',
		'7_serie' => '7ª ano do fundamental',
		'8_serie' => '8ª ano do fundamental',
		'9_serie' => '9ª ano do fundamental',
		'1_ano' => '1ª ano do médio',
		'2_ano' => '2ª ano do médio',
		'3_ano' => '3ª ano do médio',
		'pre_uni' => 'Pré-Universitário'
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
