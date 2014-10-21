<?php
/**
* Esta funcao eh utilizada especificamente para o diario de classe
* a fim de filtrar a String com as informacoes registradas pelos professores no diario de classe
*/
function recuperarAnotacoes($anotacoes_truncadas) {
	if ($anotacoes_truncadas != NULL && $anotacoes_truncadas != "") {
		$primeira_quebra = explode("[#TAREFAS#]", $anotacoes_truncadas);
		$anotacoes['tarefas'] = $primeira_quebra[1];
		$segunda_quebra = explode("[#CONTEUDO#]", $primeira_quebra[0]);
		$anotacoes['conteudo'] = $segunda_quebra[1];
	
		return $anotacoes;
	}
	return "";
}

/**
* Esta funcao eh utilizada especificamente para o diario de classe
* a fim de recuperar as informacoes registradas pelos professores no diario de classe
* no formato "[#CONTEUDO#][#TAREFAS#]"
*/
function recuperarTarefasDoDiario($conTotvs, $data, $ra) {
	$stmt = mssql_init('ZC7S_DIARIOAULAS', $conTotvs);
	mssql_bind($stmt, '@Data', $data, SQLVARCHAR); 
	mssql_bind($stmt, '@RA', $ra, SQLVARCHAR); 
	$retorno = mssql_execute($stmt); 
	mssql_free_statement($stmt);
	return $retorno;	
}

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



?>