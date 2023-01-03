
<?php

	include('funcoes/conecta.php');

	$id = $_GET['id'];

	$query = "DELETE FROM carros WHERE id = '".$id."'";

	$resultado = mysqli_query(conecta(), $query);

	if($resultado){
		header('Location: pesquisa.php?msg=Cadastro excluído!&id=&marca=&modelo=&cor=&ano=&placa=&renavan=&cambio=');


	}
	else {
		echo 'Erro';
	}