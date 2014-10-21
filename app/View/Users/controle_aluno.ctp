<?php
error_reporting(E_ALL);
session_start();
include("lib/util.php");
include("lib/config.php");
include("lib/diario-db.php");
//include("logger.php");

$conTotvs = mssql_connect($hostTotvs, $userTotvs, $passTotvs);
mssql_select_db($dbTotvs, $conTotvs);

$_SESSION['ra'] = $_REQUEST['matricula'];

// Prepara e executa a procedure no TOTVS
$resultado_dados_do_aluno = recuperarDadosDoAluno($conTotvs, $_SESSION['ra']);

if (mssql_num_rows($resultado_dados_do_aluno) <= 0 ){
	deslogar_por_dados_nao_autenticados();
}

$dados_do_aluno = mssql_fetch_array($resultado_dados_do_aluno);

if ($dados_do_aluno['DtNascimento'] != $_REQUEST['nascimento']) {
	deslogar_por_dados_nao_autenticados();
}

redirect("adicionar_aluno");

// Liberação de conexão
mssql_close($conTotvs);


?>