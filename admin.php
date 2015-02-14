<?php 

	function buscaUsuario($conexao, $email, $senha){
		$query = "select email, senha from admin where email = '{$email}' and senha = '{$senha}' ";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}