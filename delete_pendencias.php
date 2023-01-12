
<?php

	include('funcoes/conecta.php');

	$id = $_GET['id'];

	$query = "DELETE FROM pecas WHERE id = '".$id."'";

	$resultado = mysqli_query(conecta(), $query);

	if($resultado){
		header('Location: lista_pendencias.php?msg=Cadastro excluído!&id=&codigo=&modelo=&quantidade=&os');


	}
	else {
		echo 'Erro';
	}