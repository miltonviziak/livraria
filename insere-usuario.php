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
	<h2>Busque o usuário pelo ID</h2>
	<form action="busca-usuario.php" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="inputName" class="col-sm-2 control-label">Digite o ID do Usuario</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputName" name="id" placeholder="Digite o ID do usuário">
			</div>
		</div>
		<br/>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Buscar Usuário</button>
			</div>
		</div> 
	</form>

	<?php 
		if(isset($_SESSION['id_usuario'])){
			$usuario = buscaUsuario($conexao, $_SESSION['id_usuario']); ?>
			<p class="lead">Cliente <?=$usuario['nome']?></p>
	<?php	} ?>
		 

	
	

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
 	<a href="emprestimo.php" class="btn btn-default">Emprestar</a>
 	<a href="cancela-emprestimo.php" class="btn btn-danger">Cancelar empréstimo</a>


<?php }
	
require_once("rodape.php"); ?>
	
	
	