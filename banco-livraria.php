<?php

	function insereLivro($conexao, $nome, $sinopse, $preco){
		$query = "insert into livro (nome , sinopse, preco) values ('{$nome}', '{$sinopse}', {$preco})";
		return mysqli_query($conexao, $query);
	}

	function insereUsuario($conexao, $nome, $telefone){
		$query = "insert into usuario (nome, telefone) values ('{$nome}', '{$telefone}')";
		return mysqli_query($conexao, $query);
	}

	function listaLivro($conexao){
		$livros = [];
		$query = "select * from livro";
		$resultado = mysqli_query($conexao, $query);
		while($livro = mysqli_fetch_assoc($resultado)){
			array_push($livros, $livro);
		}

		return $livros;
	}


	function listaUsuario($conexao){
		$usuarios = [];
		$query = "select * from usuario";
		$resultado = mysqli_query($conexao, $query);
		while($usuario = mysqli_fetch_assoc($resultado)){
			array_push($usuarios, $usuario);
		}
		return $usuarios;
	}

	function removeLivro($conexao, $id){
		$query = "delete from livro where id = {$id}";
		return mysqli_query($conexao, $query);
	}

	function removeUsuario($conexao, $id){
		$query = "delete from usuario where id = {$id}";
		return mysqli_query($conexao, $query);
	}

	function buscaLivro($conexao, $id){
		$query = "select * from livro where id = {$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function alteraLivro($conexao, $id, $nome, $sinopse, $preco){
		$query ="update livro set nome = '{$nome}', sinopse = '{$sinopse}', preco = '{$preco}' where id = {$id}";
		return mysqli_query($conexao, $query);
	}

	function buscaUsuario($conexao, $id){
		$query = "select * from usuario where id = {$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function alteraUsuario($conexao, $id, $nome, $telefone){
		$query ="update usuario set nome = '{$nome}', telefone = '{$telefone}' where id = {$id}";
		return mysqli_query($conexao, $query);
	}

	function searchLivro($conexao, $nome){
		$livro = [];
		$query = "select * from livro where nome like '{$nome}%'";
		$resultado = mysqli_query($conexao, $query);
		while($livros = mysqli_fetch_assoc($resultado)){
			array_push($livro, $livros);
		}
		return $livro;
	}


	function adicionaEmprestimo($conexao, $id_usuario){
		$query = "insert into emprestimo (usuario_id) values ({$id_usuario})";
		return mysqli_query($conexao, $query);
	}


	function adicionaDetalheEmprestimo($conexao, $livro_id, $emprestimo_id){
		$query = "insert into detalheemprestimo (livro_id, emprestimo_id) values ({$livro_id}, {$emprestimo_id}) ";
		return mysqli_query($conexao, $query);
	}


	function retornaIdEmprestimo($conexao){
		return mysqli_insert_id($conexao); //função nova ela retorna o id do ultimo insert.
	}




