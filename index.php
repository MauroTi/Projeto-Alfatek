
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Pendências e Peças</title>
	<style type="text/css">
		button
		{
			margin: 20px 45px;
			padding: 8px;
			font-size: 20px;


		}
		#container
		{
			width: 50%;
			margin: 50px auto;
			border: solid 8px;

		}
		h1, h2
		{
			margin-top: 20px;
			text-align: center;
		}
		a.button:link
		{
			text-decoration: none;

		}
		#indice
		{
			width: 50%;
			margin: 10px auto;
			text-align: center;
			
		}

		
	</style>
</head>
<body>
	
	<?php
   /*session_start();
    if (isset($_SESSION['logged_in']) == false) {
        header("location: entrar.php");
    }*/

	include ('funcoes/logo.php'); 
	
	
	?>
	<h1>Cadastro de Pendências e Peças</h1>
	<div id="container">
		<h2>Escolha uma Opção:</h2>
		<div id="indice">
			<button><a href="cadastrar_estoque.php" class="button" style="color: #000">Cadastrar Peças</a></button>
			<button><a href="cadastrar_pendencias.php"  class="button"  style="color: #000">Cadastrar Pendências</a></button>
			<button><a href="lista_pendencias.php"  class="button"  style="color: #000">Lista de Pendências</a></button>
			<button><a href="lista_estoque.php"  class="button"  style="color: #000">Lista de Peças</a></button>
		</div>
	</div>
</body>
</html>