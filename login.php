<?php
include('funcoes/conecta.php');
session_start();

if(isset($_SESSION['login'])) header('Location: index.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['login'])){
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$resultado = mysqli_query(conecta(), "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'");
		$usuario = mysqli_fetch_assoc($resultado);
		if($usuario){
			$_SESSION['login'] = true;
			header('Location: index.php');
		}else{          
			$errorMessage = 'Usuário ou senha inválidos';
		}
	}elseif(isset($_POST['register'])){
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		mysqli_query(conecta(), "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')");
		$errorMessage = 'Usuário cadastrado com sucesso';
	}
}
?>