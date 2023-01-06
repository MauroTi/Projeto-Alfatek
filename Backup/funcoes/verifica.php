<a href="inicio.php">Login</a> <a href="verifica.php">Site</a> <a href="encerra.php">Logout</a>
<hr>
<?php

	session_start();

	if(isset($_SESSION['status']) && $_SESSION['status'] == true) {
		echo 'Acesso permitido';
	}
	else {
		echo 'Usuário sem permissão';
	}