<?php 

	include('funcoes/conecta.php');
	


	$id = $_GET['id'];
	$marca = $_GET['nome'];
	$modelo = $_GET['codigo'];
	$cor = $_GET['quantidade'];
	$ano = $_GET['os'];
	

	$query = "UPDATE pecas SET nome = '".$nome."', codigo ='".$codigo."', quantidade ='".$quantidade."', os ='".$os."' WHERE id = '".$id."'";

	$query = "UPDATE pecas SET nome = '".$nome_pendencias."', codigo ='".$codigo_pendencias."', quantidade ='".$quantidade_pendencias."', os ='".$os_pendencias."' WHERE id = '".$id."'";

	$resultado = mysqli_query(conecta(), $query);
	


	if($resultado){
		header('Location: atualizar.php?msg=Cadastro atualizado!');
	}
	else {
		echo 'Erro';
	}