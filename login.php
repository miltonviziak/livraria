<?php 
	
	require_once("cabecalho.php");
	require_once("conecta.php");
	require_once("admin.php");
	require_once("logica-usuario.php");

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$senha1 = md5($senha);

	if(buscaUsuario($conexao, $email, $senha1) == null){
		$_SESSION['danger'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}else{
		$_SESSION['success'] = "Usuário logado com sucesso";
		logaUsuario($email);
		header("Location: index.php");
	}


require_once("rodape.php"); ?>