<?php

	function conecta(){
		$link = mysqli_connect('127.0.0.1','root','','carros');
		mysqli_set_charset($link, 'utf8');

		if(!$link){
			// Matando o script e imprimindo o erro
			die('Erro: '.mysqli_connect_error());
		}

		return $link;
	}