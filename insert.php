
<?php 

	include('funcoes/conecta.php');

	$marca = $_GET['marca'];
	$modelo = $_GET['modelo'];
	$cor = $_GET['cor'];
	$ano = $_GET['ano'];
	$placa = $_GET['placa'];
	$renavan = $_GET['renavan'];
	$cambio = $_GET['cambio'];

	$query = "INSERT INTO carros (marca,modelo,cor,ano,placa,renavan,cambio) VALUES 
	('".$marca."','".$modelo."','".$cor."','".$ano."','".$placa."','".$renavan."','".$cambio."')";

	$resultado = mysqli_query(conecta(), $query);

	if($resultado){
		header('Location: cadastrar.php?msg=Cadastro efetuado!'); 
		/*echo '<script type="text/JavaScript"> 
   alert("Cadastro efetuado com sucesso!");
     </script>';*/

	}
	else {
		echo 'Erro';
	}