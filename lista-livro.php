<?php 
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");
	require_once("logica-usuario.php");



?>

	<?php if(usuarioEstaLogado()){ ?>

<?php 
	if(array_key_exists("removido", $_GET) && $_GET == true){ ?>
		<div class="alert alert-success" role="alert">Livro Removido com sucesso.</div>
	<?php } ?>
	<table class="table table-striped table-bordered">
		<tr>
			<td>Nome</td>
			<td>Sinopse</td>
			<td>Preço</td>
		</tr>

<?php

	$livro = listaLivro($conexao);
	
	foreach($livro as $l){ ?>
	
		<tr>
			<td><?=$l['nome']; ?></td>
			<td><?=$l['sinopse']; ?></td>
			<td>R$ <?=$l['preco']; ?></td>
			<td><a class="btn btn-default" href="altera-livro-formulario.php?id=<?=$l['id']?>">Alterar</a></td>
			<td>
				<form action="remove-livro.php" method="post" >
					<input type="hidden" name="id" value="<?=$l['id']?>">
					<button type="submit" class="btn btn-danger">Deletar</button>
				</form>
			</td>
			<td>
				<form action="adiciona-emprestimo.php" method="post">
					<input type="hidden" value="<?=$l['id']?>" name="id">
					<button type="submit" class="btn btn-default">Emprestar</button>
				</form>
			</td>
		</tr>
	
	<?php } ?>
	</table>


	 <?php }else{ ?>
 		<div class="alert alert-danger" role="alert">Para usar esta funcionalidade você precisa estar logado.</div>
 	<?php } ?>



<?php require_once("rodape.php"); ?>