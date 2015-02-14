<?php
	require_once("cabecalho.php");
	require_once("conecta.php");
	require_once("banco-livraria.php");


	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	

	if(alteraUsuario($conexao, $id, $nome, $telefone)){ ?>
		<div class=" alert alert-success" role="alert">O livro foi alterado com sucesso.</div> 
	<?php  }else { 
		$msg = mysqli_error($conexao);	?>
		<div class="alert alert-danger" role="alert">O livro nao foi alterado <?=$msg?></div>
	<?php } ?>

	



<?php require_once("rodape.php");?>