<?php 
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");

	$id = $_GET['id'];
	$usuario = buscaUsuario($conexao, $id);
?>

	<form action="adiciona-usuario.php" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="inputName" class="col-sm-2 control-label">Nome do Usuário</label>
			<div class="col-sm-10">
				<input type="hidden" id="id" value="<?=$id?>">
				<input type="text" class="form-control" id="inputName" name="nome" placeholder="Nome complero do usuário" value="<?=$usuario['nome']?>">
			</div>
		</div>

		<div class="form-group">
			<label for="inputTelefone" class="col-sm-2 control-label">Telefone</label>
			<div class="col-sm-10">
				<input type="text" name="telefone" class="form-control" id="inputTelefone" placeholder="Digite o telefone" value="<?=$usuario['telefone']?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Alterar Usuário</button>
			</div>
		</div> 
	</form>


<?php require_once("rodape.php"); ?>