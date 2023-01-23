<?php
	session_start();
	if(isset($_POST['usuario']) && isset($_POST['senha'])) {
		include('funcoes/conecta.php');

		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		$query = "SELECT * FROM pecas WHERE usuario = '".$usuario."'";

		$resultado = mysqli_query(conecta(), $query);

		$usuario = mysqli_fetch_assoc($resultado);

		if($usuario) {
			if($usuario['senha'] == $senha) {
				$_SESSION['login'] = $usuario['usuario'];
				header('Location: index.php?msg=Logado com sucesso!');
			}
			else {
				header('Location: entrar.php?msg=Senha inválida!');
			}
		}
		else {
			header('Location: entrar.php?msg=Usuário inexistente');
		}
	}