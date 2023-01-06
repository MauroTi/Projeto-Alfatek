
<?php 

	include('funcoes/conecta.php');

	$nome = $_GET['nome'];
	$codigo = $_GET['codigo'];
	$quantidade = $_GET['quantidade'];
	$os = $_GET['os'];
	

	$query = "INSERT INTO pecas (nome,codigo,quantidade,os) VALUES 
	('".$nome."','".$codigo."','".$quantidade."','".$os."')";

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