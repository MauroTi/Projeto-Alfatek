
<?php
  include('funcoes/conecta.php');

  $id = mysqli_real_escape_string(conecta(), $_POST['id']);
  $nome = mysqli_real_escape_string(conecta(), $_POST['nome']);
  $codigo = mysqli_real_escape_string(conecta(), $_POST['codigo']);
  $quantidade = mysqli_real_escape_string(conecta(), $_POST['quantidade']);
  $os = mysqli_real_escape_string(conecta(), $_POST['os']);

  $query = "INSERT INTO pecas (id,nome,codigo,quantidade,os) VALUES ('$id','$nome','$codigo','$quantidade','$os')";

  $resultado = mysqli_query(conecta(), $query);

  if ($resultado) {
    header('Location: cadastrar.php?msg=Cadastro efetuado!');
  } else {
    echo 'Erro';
  }

/*
	include('funcoes/conecta.php');

	$id = $_GET['id'];
	$nome = $_GET['nome'];
	$codigo = $_GET['codigo'];
	$quantidade = $_GET['quantidade'];
	$os = $_GET['os'];
	

	$query = "INSERT INTO pecas (id,nome,codigo,quantidade,os) VALUES 
	('".$id."','".$nome."','".$codigo."','".$quantidade."','".$os."')";

	$resultado = mysqli_query(conecta(), $query);

	if($resultado){
		header('Location: cadastrar.php?msg=Cadastro efetuado!'); 
		/*echo '<script type="text/JavaScript"> 
   alert("Cadastro efetuado com sucesso!");
     </script>';

	}
	else {
		echo 'Erro';
	}*/