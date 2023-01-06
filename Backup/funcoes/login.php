<?php
	session_start();
	if(isset($_POST['user']) && isset($_POST['senha'])) {
		include('funcoes/conecta.php');

		$user = $_POST['user'];
		$senha = $_POST['senha'];

		$query = "SELECT * FROM usuarios WHERE username = '".$user."'";

		$resultado = mysqli_query(conecta(), $query);

		$usuario = mysqli_fetch_assoc($resultado);

		if($usuario) {
			if($usuario['senha'] == $senha) {
				$_SESSION['login'] = $usuario['nome'];
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