

<?php


echo $this->Form->create('Egresso', array('action' => 'add'));
echo $this->Form->input('nome', array('label' => '1. ' . utf8_encode($perguntas[0]['Pergunta']['nome_egresso'] )) );
echo $this->Form->input('matricula', array('label' => '2. ' . utf8_encode($perguntas[0]['Pergunta']['numero_matricula'] )) );
echo $this->Form->input('telefone', array('label' => '3. ' . utf8_encode($perguntas[0]['Pergunta']['telefone_contato'] )) );
echo $this->Form->input('endereco', array('label' => '4. ' . utf8_encode($perguntas[0]['Pergunta']['endereco'] )) );
echo $this->Form->input('email', array('label' => '5. ' . utf8_encode($perguntas[0]['Pergunta']['email'] )));

$options=array('masculino'=>'Masculino','feminino'=>'Feminino');
$attributes=array('legend' => '6. ' . utf8_encode($perguntas[0]['Pergunta']['genero_concluinte']));
echo $this->Form->radio('genero',$options,$attributes);


$options=array('solteiro'=>'Solteiro(a)','casado'=>'Casado(a)', 'separado' => 'Separado(a)', 'divorciado' => 'Divorciado(a)', 'viuvo' => 'Viúvo(a)');
$attributes=array('legend' => '7. '. utf8_encode($perguntas[0]['Pergunta']['estado_civil']));
echo $this->Form->radio('estado_civil',$options,$attributes);

$options=array('administração' => 'Arquitetura', 'ciências contábeis'=>'Ciências Contábeis','direito'=>'Direito', 'enganheria de produção'=>'Engenharia de Produção', 'jornalismo'=>'Jornalismo', 'pedagogia'=>'Pedagogia', 'publicidade e propaganda'=>'Publicidade e Propaganda', 'sistemas de informação'=>'Sistemas de Informação', 'graduação tecnológica design gráfico'=>'Graduação Tecnológica Design Gráfico', 'graduação tecnológica negócios imobiliários'=>'Graduação TecnológicaNegócios Imobiliários' );
$attributes=array('legend' => '8. '. utf8_encode($perguntas[0]['Pergunta']['curso_concluido']));
echo $this->Form->radio('curso_concluido_fa7',$options,$attributes);

echo $this->Form->input('idade_conclusao', array('label' => '9. '. utf8_encode($perguntas[0]['Pergunta']['idade_finalizacao'] ) ));

echo $this->Form->input('ano_conclusao', array('label' => '10. '. utf8_encode($perguntas[0]['Pergunta']['ano_conclusao'] ) ));

echo $this->Form->input('tempo_curso', array('label' => '11. ' . utf8_encode($perguntas[0]['Pergunta']['tempo_curso']) ));

echo $this->Form->input('trabalhando', array('label' => '12. ' . utf8_encode($perguntas[0]['Pergunta']['trabalhando'] ) ));

$options=array('sim'=>'Sim','não'=>'Não');
$attributes=array('legend' => '13. ' . utf8_encode($perguntas[0]['Pergunta']['area_curso']));
echo $this->Form->radio('emprego_area',$options,$attributes);

$options=array('até seis meses'=>'até seis meses', 'de 7 meses a 1 ano'=>'de 7 meses a 1 ano', 'de 1 a 2 anos'=>'de 1 a 2 anos', 'mais de 2 anos'=>'mais de 2 anos' );
$attributes=array('legend' => '14. ' . utf8_encode($perguntas[0]['Pergunta']['tempo_emprego']));
echo $this->Form->radio('tempo_emprego',$options,$attributes);

$options=array('Atendimento'=>'Atendimento', 'Função Administrativa'=>'Função Administrativa', 'Gerente'=>'Gerente', 'Proprietário'=>'Proprietário', 'Vendedor'=>'Vendedor');
$attributes=array('legend' => '15. '. utf8_encode($perguntas[0]['Pergunta']['funcao_trabalho']));
echo $this->Form->radio('funcao_trabalho',$options,$attributes);

$options=array('Comércio'=>'Comércio', 'ONG'=>'ONG', 'Setor Público'=>'Setor Público', 'Indústria'=>'Indústria', 'Serviço'=>'Serviço');
$attributes=array('legend' => '16. '. utf8_encode($perguntas[0]['Pergunta']['setor_organizacao']));
echo $this->Form->radio('setor_atauacao',$options,$attributes);

$options=array('Privada'=>'Privada','Pública'=>'Pública', 'Organização não Governamental'=>'Organização não Governamental');
$attributes=array('legend' => '17. '. utf8_encode($perguntas[0]['Pergunta']['empresa_funcao']));
echo $this->Form->radio('empresa',$options,$attributes);

$options=array('até 1 salário mínimo(R$ 724,00)'=>'até 1 salário mínimo(R$ 724,00)','De R$ 724,00 até R$ 2.172,00'=>'De R$ 724,00 até R$ 2.172,00', 'De R$ 2.173,00 até R$ 3.344,00'=>'De R$ 2.173,00 até R$ 3.344,00','De R$ 3.345,00 até R$ 4.800,00' =>'De R$ 3.345,00 até R$ 4.800,00','De R$ 4.800,00 até R$ 6.515,00' => 'De R$ 4.800,00 até R$ 6.515,00','De R$ 6.516,00 até R$ 8.688,00' => 'De R$ 6.516,00 até R$ 8.688,00','Acima de R$ 8.688,00' => 'Acima de R$ 8.688,00');
$attributes=array('legend' => '18. '. utf8_encode($perguntas[0]['Pergunta']['salario']));
echo $this->Form->radio('faixa_salarial
	',$options,$attributes);

//questao 19
echo $this->Form->input('field', array(
    'options' => array(1, 2, 3, 4, 5),
    'empty' => '(choose one)'
));

echo "19. Atribua nota de 01 (um - menor valor) a 10 (dez - maior valor) referente a sua formação na FA7? <br/>";
$options = array('type'=>'number', 'min' => 1, 'max' => 10, 'label'=>'a.'. utf8_encode($perguntas[0]['Pergunta']['conteudos_programas']));
echo $this ->Form->input('conteudos_programas', $options);

$options = array('type'=>'number', 'min' => 0, 'max' => 10, 'label'=>'b. '. utf8_encode($perguntas[0]['Pergunta']['termos_experiencia']));
echo $this ->Form->input('termos_experiencia', $options);

$options = array('type'=>'number', 'min' => 0, 'max' => 10, 'label'=>'c. '. utf8_encode($perguntas[0]['Pergunta']['formacao_teorica']));
echo $this ->Form->input('formacao_teorica', $options);

$options = array('type'=>'number', 'min' => 0, 'max' => 10, 'label'=>'d. '. utf8_encode($perguntas[0]['Pergunta']['formacao_cidadania']));
echo $this ->Form->input('formacao_cidadania', $options);

$options = array('type'=>'number', 'min' => 0, 'max' => 10, 'label'=>'e. '. utf8_encode($perguntas[0]['Pergunta']['formacao_contexto']));
echo $this ->Form->input('formacao_contexto', $options);

$options = array('type'=>'number', 'min' => 0, 'max' => 10, 'label'=>'f. '. utf8_encode($perguntas[0]['Pergunta']['formacao_flexibilidade']));
echo $this ->Form->input('formacao_flexibilidade', $options);

$options = array('type'=>'number', 'min' => 0, 'max' => 10, 'label'=>'g. '. utf8_encode($perguntas[0]['Pergunta']['disciplina_estagio']));
echo $this ->Form->input('disciplina_estagio', $options);

//questao 20
echo "20. Atribua nota de 01 (um - menor valor) a 5 (dez - maior valor) referente a sua formação na FA7? <br/>";

$options = array('type'=>'number', 'min' => 0, 'max' => 10, 'label'=>'a.'. utf8_encode($perguntas[0]['Pergunta']['ensino']));
echo $this ->Form->input('ensino', $options);

$options = array('type'=>'number', 'min' => 0, 'max' => 10, 'label'=>'b. '. utf8_encode($perguntas[0]['Pergunta']['estrutura']));
echo $this ->Form->input('estrutura', $options);

$options = array('type'=>'number', 'min' => 0, 'max' => 10, 'label'=>'c. '. utf8_encode($perguntas[0]['Pergunta']['reconhecimento']));
echo $this ->Form->input('reconhecimento', $options);

echo $this->Form->input('outro_curso', array('label' => '21. '. utf8_encode($perguntas[0]['Pergunta']['cursando_ou'] ) ));

echo $this->Form->input('pos_graducacao', array('label' => '22. '. utf8_encode($perguntas[0]['Pergunta']['cursou_pos'] ) ));

echo $this->Form->input('cursando', array('label' => '23. ' . utf8_encode($perguntas[0]['Pergunta']['cursando_pos']) ));

echo $this->Form->input('pretende_cursar', array('label' => '24. '. utf8_encode($perguntas[0]['Pergunta']['pretende_cursar'] ) ));

$options=array('sim'=>'Sim','não'=>'Não');
$attributes=array('legend' => '25. '. utf8_encode($perguntas[0]['Pergunta']['recomendaria_curso'] ));
echo $this->Form->radio('recomendaria',$options,$attributes);

echo $this->Form->end('Enviar');