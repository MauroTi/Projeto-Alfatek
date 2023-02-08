<?php
	/*session_start();
	if(isset($_SESSION['login'])){
		header('Location: index.php');
	}*/
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Meu Site com PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<style>

		#form_login {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
	</style>

	<body>
		<?php

		?>
		<div id="container_login">
			<form id="form_login" action="login.php" method="post">
				<table class="tabela_login" border="1">
					<td>Nome:</td>
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
		<?php if (!empty($errorMessage)) { ?><p><?php echo $errorMessage; ?></p><?php } ?>
	</div>
</body>
</html>

