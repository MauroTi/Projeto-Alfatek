<?php

	function verificaLogin(){
		if(!isset($_SESSION['login'])){
			session_destroy();
			header('Location: entrar.php?msg=Acesso restrito. Faça login!');
		}
	}