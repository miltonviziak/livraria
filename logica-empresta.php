<?php 

	

	function criaEmprestimo(){
		$_SESSION['emprestimo'] = array();
		
	}	
	
	

	function testaSecao(){
		return isset($_SESSION['emprestimo']);
	}


	function excluiEmprestimo($id){

		$indice = array_search($id, $_SESSION['emprestimo']);
		unset($_SESSION['emprestimo'][$indice]);
		
	}





	



