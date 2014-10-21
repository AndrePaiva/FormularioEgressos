<DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Formulario exemplo</title>
<body>
<?php
 if (isset($_REQUEST['mensagem'])) {
 ?>
 <div>
 	<h3><?php echo $_REQUEST['mensagem'];	 ?></h3>
 </div>
 <?php
 }
?>

<form action="controle_aluno">
	<p>Informe sua matrícula
	<input type="text" name="matricula" value="" />
	</p>
	<p>
	Informe sua data de nascimento
	<input type="text" name="nascimento" placeholder="dd/mm/yyyy"/>
	</p>
	<input value="Enviar" type="submit" />
</form>
</body>
</html>