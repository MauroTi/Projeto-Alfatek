<?php 

	include('funcoes/conecta.php');
	


	$id = $_GET['id'];
	$marca = $_GET['marca'];
	$modelo = $_GET['modelo'];
	$cor = $_GET['cor'];
	$ano = $_GET['ano'];
	$placa = $_GET['placa'];
	$renavan = $_GET['renavan'];
	$cambio = $_GET['cambio'];
	

	$query = "UPDATE carros SET marca = '".$marca."', modelo ='".$modelo."', cor ='".$cor."', ano ='".$ano."', placa ='".$placa."', renavan ='".$renavan."', cambio ='".$cambio."' WHERE id = '".$id."'";

	$resultado = mysqli_query(conecta(), $query);
	





	if($resultado){
		header('Location: atualizar.php?msg=Cadastro atualizado!');
	}
	else {
		echo 'Erro';
	}