<?php
	/*session_start();
	if(isset($_SESSION['login'])){
		header('Location: index.php');
	}*/
?>
<!--<!DOCTYPE html>
<html>
<head>
	<title>Meu Site com PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>

#form_login
{
	margin: auto;
	display: flex;
		
}
</style>

<body>
	<?php
	
	?>
	<div id="container_login">
	<form id="form_login" action="login.php" method="post">
		<table class="tabela_login" border="1">
				<td>Usuário:</td>
				<td><input type="text" name="usuario"></td>
			</tr>
			<tr>
				<td>Senha:</td>
				<td><input type="password" name="senha"></td>
			</tr>
			<tr>
				<td colspan="2">
					<button style="width: 100%;">Logar</button>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button style="width: 100%;">Cadastrar</button>
				</td>
			</tr>
		</table>
	</form>
	<?php //if (!empty($errorMessage)) { ?><p><?php //echo $errorMessage; ?></p><?php //} ?>
	</div>
</body>
</html>-->

<?php
include('funcoes/conecta.php');
session_start();

if(isset($_SESSION['login'])) header('Location: index.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['login'])){
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$resultado = mysqli_query(conecta(), "SELECT * FROM pecas WHERE usuario = '$usuario' AND senha = '$senha'");
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
		mysqli_query(conecta(), "INSERT INTO pecas (usuario, senha) VALUES ('$usuario', '$senha')");
		$errorMessage = 'Usuário cadastrado com sucesso';
	}
}
?>
<h2>Logar</h2>
<form action="" method="post">
  <label for="usuario">Nome de usuário:</label>
  <input type="text" id="usuario" name="usuario">
  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha">
  <input type="submit" value="Submit" name="login">
</form>

<h2>Cadastrar</h2>
<form action="" method="post">
  <label for="usuario">Nome de usuário:</label>
  <input type="text" id="usuario" name="usuario">
  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha">
  <input type="submit" value="Submit" name="register">
</form>
