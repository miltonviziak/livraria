<?php 
	require_once("cabecalho.php");

	require_once("logica-usuario.php");

?>
	
	

	<?php if(usuarioEstaLogado()){ ?>
		<h1>Bem Vindo á Livraria</h1>
		<div class=" alert alert-success" role="alert">Usuário <?=usuarioLogado();?> logado com sucesso.
		</div>
	<?php }else { ?>
	<p class="lead">Para usar o sistema faça o login.</p>
	<form action="login.php" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputPassword" placeholder="Senha" name="senha">
			</div>
		</div>
		<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" class="btn btn-default">Logar</button>
    		</div>
  		</div>
	</form>

	<?php } ?>

<?php require_once("rodape.php"); ?>
