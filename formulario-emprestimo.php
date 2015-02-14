<?php 

	
	
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");
	require_once("logica-usuario.php");
	require_once("logica-empresta.php");

	if(empty($_SESSION['emprestimo'])){ ?>
		<div class="alert alert-success" role="alert">Lista de empréstimo vazia.</div>
	<?php }else{ ?>


	
	
	<?php if(usuarioEstaLogado()){ ?>
	<h2>Empréstimo</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Nome:</td>
			<td>Sinopse</td>
		</tr>
		<tr>
			<?php 

			foreach($_SESSION['emprestimo'] as $livro) { 
				$resultado = buscaLivro($conexao, $livro)

				?>
				<td><?=$resultado['nome']?></td>
				<td><?=$resultado['sinopse']?></td>
				
					
					<td><a href="excluir-emprestimo.php?id=<?=$resultado['id']?>" class="btn btn-danger">Excluir</a></td>
				
		</tr>

			<?php } ?>
	</table>




 	<?php }else{ ?>
 		<div class="alert alert-danger" role="alert">Para usar esta funcionalidade você precisa estar logado.</div>
 	<?php } ?>
 	<a href="insere-usuario.php" class="btn btn-default">Avançar</a>
 	<a href="cancela-emprestimo.php" class="btn btn-danger">Cancelar empréstimo</a>


<?php }
	
require_once("rodape.php"); ?>
	
	
	