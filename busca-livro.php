<?php 
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");
	require_once("logica-usuario.php");

	$nome = $_POST['nome'];

	$resultado = searchLivro($conexao , $nome);

	if($resultado){ ?>
		<h2>Resultado da Busca</h2>
		<table class="table table-striped table-bordered">
		<tr>
			<td>Nome</td>
			<td>Sinopse</td>
			<td>Preço</td>
		</tr>

<?php
	
	
	foreach($resultado as $l){ ?>
	
		<tr>
			<td><?=$l['nome']; ?></td>
			<td><?=$l['sinopse']; ?></td>
			<td>R$ <?=$l['preco']; ?></td>
			<td>
				<form action="adiciona-emprestimo.php" method="post">
					<input type="hidden" value="<?=$l['id']?>" name="id">
					<button type="submit" class="btn btn-default">Emprestar</button>
				</form>
			</td>
			
		</tr>
	
	<?php } ?>
	</table>



	<?php }else { ?>
		<div class="alert alert-danger" role="alert">Não foi encontrado nenhum livro.</div>
	<?php } ?>

	

	


<?php require_once("rodape.php"); ?>