<?php 

	require_once("logica-usuario.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/loja.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="index.php">Home</a></li>
				<li role="presentation"><a href="formulario-livro.php">Cadastro de Livros</a></li>
				<li role="presentation"><a href="formulario-usuario.php">Cadastro de Usuários</a></li>
				<li role="presentation"><a href="lista-livro.php">Lista Livros</a></li>
				<li role="presentation"><a href="lista-usuario.php">Lista Usuários</a></li>
				<li role="presentation"><a href="formulario-busca.php">Busca de Livros</a></li>
				<li role="presentation"><a href="formulario-emprestimo.php">Empréstimo</a></li>
				<li role="presentation"><a href="#">Sobre</a></li>
				<?php if(usuarioEstaLogado()){ ?>
				<li role="presentation"><a href="logout.php">Deslogar <?=usuarioLogado();?></a><li>
				<?php }?>
			</ul>
		</header>
		<div class="container">
			<div class="principal">
				
