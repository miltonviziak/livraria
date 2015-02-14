<?php 
	
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");
	require_once("logica-usuario.php");
	require_once("logica-empresta.php");
	
	unset($_SESSION['emprestimo']);
	unset($_SESSION['id_usuario']);
	header("Location: formulario-emprestimo.php");
	die();


	require_once("rodape.php");