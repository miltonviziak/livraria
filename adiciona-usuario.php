<?php
	require_once("cabecalho.php");
	require_once("conecta.php");
	require_once("banco-livraria.php");

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];

	if(insereUsuario($conexao, $nome, $telefone)){ ?>
		<div class="alert alert-success" role="alert">Usuário <?=$nome;?> cadastrado com sucesso.</div>

	<?php }else { 
		$msg = mysqli_error($conexao);
	?>
		<div class="alert alert-danger" role="alert">Usuário <?=$nome;?> não foi cadastrado <?=$msg;?>.</div>
	<?php } ?>


<?php require_once("rodape.php"); ?>