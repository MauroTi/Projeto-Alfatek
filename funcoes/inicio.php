<a href="inicio.php">Login</a> <a href="verifica.php">Site</a> <a href="encerra.php">Logout</a>
<hr>
<?php 
	session_start();

	$_SESSION['status'] = true;

	echo 'Logado com sucesso';