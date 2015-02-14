<?php 

	
	
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");
	require_once("logica-usuario.php");
	require_once("logica-empresta.php");


	$id = $_POST['id'];

	
	if(testaSecao()){
		array_push($_SESSION['emprestimo'], $id);
		
	}else{
		criaEmprestimo();
		array_push($_SESSION['emprestimo'], $id);
		
	}

	

	header("Location: formulario-emprestimo.php");

	
require_once("rodape.php"); ?>
	
	
	