<?php
function retira_acentos($texto) { 
	$array1 = array( "á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç" 
	, "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç", "'" ); 
	$array2 = array( "a", "a", "a", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c" 
	, "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C", "" ); 
	return ltrim(rtrim(str_replace($array1, $array2, $texto))); 
} 

function executarConsulta($query) {
	$resultado = mysql_query($query) or die(mysql_error());
	
	$numeroResultados = mysql_num_rows($resultado);
	if ($numeroResultados > 0) {
		return $resultado;
	} else {
		return NULL;
	}
}

function executarAlteracao($query) {
	$resultado = mysql_query($query) or die(mysql_error());
}

function redirect($endereco, $mensagem = ""){
	if ($mensagem == "") {
		echo "<script>location=\"$endereco\"</script>";
		exit;
		return;
	} else {
		echo "<script>location=\"$endereco?mensagem=$mensagem\"</script>";
		exit;
		return;
	}
}

function deslogar_por_dados_nao_autenticados() {
	redirect("erro");
}
?>

