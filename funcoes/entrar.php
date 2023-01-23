<?php
	session_start();
	if(isset($_SESSION['login'])){
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Meu Site com PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	
	?>
	<form action="login.php" method="post">
		<table class="tabela login" border="1">
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
		</table>
	</form>
</body>
</html>