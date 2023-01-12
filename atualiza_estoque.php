<?php 

	include('funcoes/conecta.php');
	


	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$codigo = $_POST['codigo'];
	$quantidade = $_POST['quantidade'];
	
	

	$query = "UPDATE pecas SET nome = '".$nome."', codigo ='".$codigo."', quantidade ='".$quantidade."' WHERE id = '".$id."'";


	$resultado = mysqli_query(conecta(), $query);
	


	if($resultado){
		header('Location: lista_estoque.php?msg=Cadastro atualizado!');
	}
	else {
		echo 'Erro';
	}