<?php 
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");
	require_once("logica-usuario.php");
	require_once("logica-empresta.php");


	$id = $_GET['id'];
	excluiEmprestimo($id);
	header("Location: formulario-emprestimo.php");
	die();
	