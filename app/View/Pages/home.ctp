
<h1>Add Post</h1>
<?php
echo $this->Form->create('Egresso', array('action' => 'add'));
echo $this->Form->input('nome', array('label' => 'Nome do egresso' ) );
echo $this->Form->input('email', array('rows' => '1'));
echo $this->Form->end('Enviar');