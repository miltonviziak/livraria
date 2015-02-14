<?php 
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");

	$id = $_POST['id'];


	removeUsuario($conexao, $id);
	header("Location:lista-usuario.php?removido=true");
	die();

?>




<?php require_once("rodape.php"); ?>