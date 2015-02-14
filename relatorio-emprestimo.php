<?php 
	require_once("cabecalho.php"); 
	require_once("conecta.php");
	require_once("banco-livraria.php");
	require_once("logica-usuario.php");
	require_once("logica-empresta.php");

	$nextWeek = time() + (7 * 24 * 60 * 60);
?>
	<h2>Informações do empréstimo</h2>
	

		<?php 
		if(isset($_SESSION['id_usuario'])){
			$usuario = buscaUsuario($conexao, $_SESSION['id_usuario']); ?>
			<div class="alert alert-success" role="alert">O emprestimo foi feito pelo usuário(a) <?=$usuario['nome'];?></div>

	<?php	} ?>

	<p class="lead">Pegou esses livros</p>
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
			</tr>

			<?php } ?>
	</table>
	<p class="lead">E terá que devolver <?=date('d-m-Y', $nextWeek)?></p>

	<a class="btn btn-default" href="index.php">Voltar a Pagina Inicial</a>

<?php	
	
	unset($_SESSION['emprestimo']);
	unset($_SESSION['id_usuario']);
	require_once("rodape.php"); 

?>