<?php
error_reporting(E_ALL);
session_start();
include("lib/util.php");
include("lib/config.php");
include("lib/diario-db.php");
//include("logger.php");

$conTotvs = mssql_connect($hostTotvs, $userTotvs, $passTotvs);
mssql_select_db($dbTotvs, $conTotvs);

$_SESSION['cpf'] = $_REQUEST['cpf'];

// Prepara e executa a procedure no TOTVS
$resultado_dados_do_func = recuperarDadosDoFunc($conTotvs, $_SESSION['cpf']);

if (mssql_num_rows($resultado_dados_do_func) <= 0 ){
	deslogar_por_dados_nao_autenticados();
}

redirect("formulario");

// Liberação de conexão
mssql_close($conTotvs);


?>