
<h1>Add Post</h1>
<?php

echo $this->Form->create('Egresso', array('action' => 'add'));
echo $this->Form->input('nome', array('label' => '1. Nome completo' ) );
echo $this->Form->input('matricula', array('label' => '2. Número de matrícula' ) );
echo $this->Form->input('telefone', array('label' => '3. Telefone de contato' ) );
echo $this->Form->input('endereco', array('label' => '4. Endereço' ) );
echo $this->Form->input('email', array('label' => '5. Email','rows' => '1'));

$options=array('masculino'=>'Masculino','feminino'=>'Feminino');
$attributes=array('legend' => '6. Genero do concluinte:');
echo $this->Form->radio('genero',$options,$attributes);


$options=array('solteiro'=>'Solteiro(a)','casado'=>'Casado(a)', 'separado' => 'Separado(a)', 'divorciado' => 'Divorciado(a)', 'viuvo' => 'Viúvo(a)');
$attributes=array('legend' => '7. Estado civil:');
echo $this->Form->radio('estado_civil',$options,$attributes);

$options=array('administração' => 'Arquitetura', 'ciências contábeis'=>'Ciências Contábeis','direito'=>'Direito', 'enganheria de produção'=>'Engenharia de Produção', 'jornalismo'=>'Jornalismo', 'pedagogia'=>'Pedagogia', 'publicidade e propaganda'=>'Publicidade e Propaganda', 'sistemas de informação'=>'Sistemas de Informação', 'graduação tecnológica design gráfico'=>'Graduação Tecnológica Design Gráfico', 'graduação tecnológica negócios imobiliários'=>'Graduação TecnológicaNegócios Imobiliários' );
$attributes=array('legend' => '8. Curso concluído na FA7:');
echo $this->Form->radio('curso_concluido_fa7',$options,$attributes);

echo $this->Form->input('idade_conclusao', array('label' => '9. Qual idade possuía quando finalizou o curso de graduação?' ) );

echo $this->Form->input('ano_conclusao', array('label' => '10. Indique o ano de conclusão de seu curso?' ) );

echo $this->Form->input('tempo_curso', array('label' => '11. Em quanto tempo você concluiu seu curso? (Anos)' ) );

echo $this->Form->input('trabalhando', array('label' => '12. Está trabalhando? Onde?' ) );

$options=array('sim'=>'Sim','não'=>'Não');
$attributes=array('legend' => '13. Este emprego é na sua área de formação?');
echo $this->Form->radio('emprego_area',$options,$attributes);

$options=array('até seis meses'=>'até seis meses', 'de 7 meses a 1 ano'=>'de 7 meses a 1 ano', 'de 1 a 2 anos'=>'de 1 a 2 anos', 'mais de 2 anos'=>'mais de 2 anos' );
$attributes=array('legend' => '14. Há quanto tempo está neste emprego?');
echo $this->Form->radio('tempo_emprego',$options,$attributes);

$options=array('Atendimento'=>'Atendimento', 'Função Administrativa'=>'Função Administrativa', 'Gerente'=>'Gerente', 'Proprietário'=>'Proprietário', 'Vendedor'=>'Vendedor');
$attributes=array('legend' => '15. Sua atual função neste trabalho:');
echo $this->Form->radio('funcao_trabalho',$options,$attributes);

$options=array('Comércio'=>'Comércio', 'ONG'=>'ONG', 'Setor Público'=>'Setor Público', 'Indústria'=>'Indústria', 'Serviço'=>'Serviço');
$attributes=array('legend' => '16. Setor de atuação da organização em que estágio/trabalha atualmente:');
echo $this->Form->radio('setor_atauacao',$options,$attributes);

$options=array('Privada'=>'Privada','Pública'=>'Pública', 'Organização não Governamental'=>'Organização não Governamental');
$attributes=array('legend' => '17. A empresa na qual exerce sua função é:');
echo $this->Form->radio('empresa
	',$options,$attributes);

$options=array('até 1 salário mínimo(R$724,00)'=>'até 1 salário mínimo(R$724,00)','De R$724,00 até R$2.172,00'=>'De R$724,00 até R$2.172,00', 'De R$2.173,00 até R$3.344,00'=>'De R$2.173,00 até R$3.344,00','De R$3.345,00 até R$4.800,00' =>'De R$3.345,00 até R$4.800,00','De R$4.800,00 até R$6.515,00' => 'De R$4.800,00 até R$6.515,00','De R$6.516,00 até R$8.688,00' => 'De R$6.516,00 até R$8.688,00','Acima de R$8.688,00' => 'Acima de R$8.688,00');
$attributes=array('legend' => '18.	Indique sua faixa salarial:');
echo $this->Form->radio('faixa_salarial
	',$options,$attributes);

//questao 19

//questao 20

echo $this->Form->input('outro_curso', array('label' => '21. Está cursando ou cursou outro curso de Graduação? Se sim, especifique.' ) );

echo $this->Form->input('pos_graducacao', array('label' => '22.	Você cursou algum curso de pós-graduação? Se sim, especifique Nome/ Grau/ Instituição/ Ano de conclusão da pós-graduação.' ) );

echo $this->Form->input('cursando', array('label' => '23. Você está cursando pós-graduação? Se sim, Nome/ Grau/ Instituição' ) );

echo $this->Form->input('pretende_cursar', array('label' => '24. Se não está cursando, pretende cursar? Se sim, especifique a área.' ) );

$options=array('sim'=>'Sim','não'=>'Não');
$attributes=array('legend' => '25. Você recomendaria seu curso para outras pessoas?');
echo $this->Form->radio('recomendaria',$options,$attributes);

echo $this->Form->end('Enviar');