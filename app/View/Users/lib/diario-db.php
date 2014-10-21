<?php
/**
* Esta eh a funcao que recupera os dados dos alunos
* 
* os campos retornados em um array indexado/associativo são  
*   RA,
*   Aluno, (Nome)
*   Sede,
*   Turno,
*   Curso,
*   Serie,
*   Turma,  
*   SeqTurma,
*   DtNascimento,
*   CPF (ou vazio quando for null)
*   
*/
function recuperarDadosDoAluno($conTotvs, $ra) {
	$stmt = mssql_init('ZC7S_UMALUNO', $conTotvs);
	mssql_bind($stmt, '@RA',  $ra , SQLVARCHAR);	 
	$retorno = mssql_execute($stmt); 
	mssql_free_statement($stmt);
	return $retorno;	
}

function recuperarDadosDoFunc($conTotvs, $cpf) {
	$stmt = mssql_init('ZUMAPESSOA', $conTotvs);
	$nascimento = $_REQUEST['nascimento'];	
	mssql_bind($stmt, '@CPF', $cpf, SQLVARCHAR); 		
	mssql_bind($stmt, '@DataNascimento', $nascimento, SQLVARCHAR);		
	$retorno = mssql_execute($stmt);
	mssql_free_statement($stmt);
	return $retorno;	
}
?>