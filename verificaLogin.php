<?php

	function verificaLogin(){
		if(!isset($_SESSION['login'])){
			session_destroy();
			header('Location: funcoes/entrar.php?msg=Acesso restrito. Faça login!');
		}
	}