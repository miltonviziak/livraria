<?php 
	require_once("cabecalho.php");
	require_once("conecta.php");
	require_once("banco-livraria.php");
	require_once("logica-usuario.php");
?>


<?php if(usuarioEstaLogado()){ ?>

<?php 
	if(array_key_exists("removido", $_GET) && $_GET == true){ ?>
		<div class="alert alert-success" role="alert">Usuário Removido com sucesso.</div>
	<?php } ?>
	<table class="table table-striped table-bordered">
		<tr>
			<td>Nome</td>
			<td>Telefone</td>
		</tr>
	<?php
		foreach(listaUsuario($conexao) as $usuario){ ?>
		<tr>
			<td><?= $usuario['nome']; ?></td>
			<td><?= $usuario['telefone']?></td>
			<td><a class="btn btn-default" href="altera-usuario-formulario.php?id=<?=$usuario['id']?>">
				Alterar</a></td>
			<td>
				<form action="remove-usuario.php" method="post">
					<input type="hidden" name="id" value="<?=$usuario['id']?>">
					<button type="submit" class="btn btn-danger">Deletar</button>
				</form>
			</td>
		</tr>

		<?php } ?>

	
	</table>


	<?php }else{ ?>
 		<div class="alert alert-danger" role="alert">Para usar esta funcionalidade você precisa estar logado.</div>
 	<?php } ?>




<?php require_once("rodape.php"); ?>