<?php 

	include('funcoes/conecta.php');
	


	$id = $_POST['id'];
	$nome_pendencias = $_POST['nome_pendencias'];
	$codigo_pendencias = $_POST['codigo_pendencias'];
	$quantidade_pendencias = $_POST['quantidade_pendencias'];
	$os_pendencias = $_POST['os_pendencias'];
	

	$query = "UPDATE pecas SET nome_pendencias = '".$nome_pendencias."', codigo_pendencias ='".$codigo_pendencias."', quantidade_pendencias ='".$quantidade_pendencias."',os_pendencias ='".$os_pendencias."' WHERE id = '".$id."'";


	$resultado = mysqli_query(conecta(), $query);
	


	if($resultado){
		header('Location: lista_pendencias.php?msg=Cadastro atualizado!');
	}
	else {
		echo 'Erro';
	}