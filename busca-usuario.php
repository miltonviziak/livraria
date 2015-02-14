<?php 
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");
	require_once("logica-usuario.php");

	$id = $_POST['id'];


	

	$_SESSION['id_usuario'] = $id;
	


	header("Location: insere-usuario.php");
	die();

