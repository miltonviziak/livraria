<?php 
	require_once("cabecalho.php"); 
	require_once("logica-usuario.php");
?>

	<?php if(usuarioEstaLogado()){ ?>

	<form action="adiciona-livro.php" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="inputName" class="col-sm-2 control-label">Nome do livro</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputName" name="nome" placeholder="Nome do Livro">
			</div>
		</div>
		<div class="form-group">
			<label for="textArea" class="col-sm-2 control-label">Sinopse</label>
			<div class="col-sm-10">
				<textarea name="sinopse" class="form-control" id="textArea" placeholder="Digite a sinopse do livro"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPreco" class="col-sm-2 control-label">Preço R$</label>
			<div class="col-sm-10">
				<input type="number" name="preco" class="form-control" id="inputPreco" placeholder="Digite o preço">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Cadastrar livro</button>
			</div>
		</div> 
	</form>

 	<?php }else{ ?>
 		<div class="alert alert-danger" role="alert">Para usar esta funcionalidade você precisa estar logado.</div>
 	<?php } ?>



<?php require_once("rodape.php"); ?>