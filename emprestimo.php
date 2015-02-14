<?php 
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");
	require_once("logica-usuario.php");
	require_once("logica-empresta.php");


	

	adicionaEmprestimo($conexao, $_SESSION['id_usuario']);

	

	$id_emprestimo = retornaIdEmprestimo($conexao);

	var_dump($id_emprestimo);
	foreach($_SESSION['emprestimo'] as $livro){
		adicionaDetalheEmprestimo($conexao, $livro, $id_emprestimo);
	}




	header("Location: relatorio-emprestimo.php");
	die();



	require_once("rodape.php"); ?>