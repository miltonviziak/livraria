<?php 
	require_once("cabecalho.php");
	require_once("conecta.php");
	require_once("banco-livraria.php");

	$nome = $_POST['nome'];
	$sinopse = $_POST['sinopse'];
	$preco = $_POST['preco'];



	if (insereLivro($conexao, $nome, $sinopse, $preco)){ ?>
		<div class="alert alert-success" role="alert">Livro <?=$nome;?> foi cadastrado com sucesso.</div>

	<?php } else {
		$msg = mysqli_error($conexao);
	?> 
		<div class="alert alert-danger" role="alert">Livro <?=$nome;?> não foi cadastrado <?=$msg;?>.</div>
	<?php } ?>


<?php require_once("rodape.php"); ?>
