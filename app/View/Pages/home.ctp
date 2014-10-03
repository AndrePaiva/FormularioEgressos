
<h1>Add Post</h1>
<?php
echo $this->Form->create('Egresso', array('action' => 'add'));
echo $this->Form->input('nome', array('label' => 'Nome completo' ) );
echo $this->Form->input('matricula', array('label' => 'Número de matrícula' ) );
echo $this->Form->input('telefone', array('label' => 'Telefone de contato' ) );
echo $this->Form->input('endereco', array('label' => 'Endereço' ) );
echo $this->Form->input('email', array('rows' => '1'));

$options=array('masculino'=>'Masculino','feminino'=>'Feminino');
$attributes=array('legend' => 'Genero do concluinte');
echo $this->Form->radio('genero',$options,$attributes);

echo $this->Form->input('estado_civil', array('label' => 'Estado civil' ) );

$options=array('solteiro'=>'Solteiro(a)','casado'=>'Casado(a)', 'separado' => 'Separado(a)', 'divorciado' => 'Divorciado(a)', 'viuvo' => 'Viúvo(a)');
$attributes=array('legend' => 'Estado civil');
echo $this->Form->radio('estado_civil',$options,$attributes);





echo $this->Form->end('Enviar');