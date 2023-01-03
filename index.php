
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gerenciar Cadastro de Veículos</title>
	<style type="text/css">
		button
		{
			margin: 80px 45px;
			padding: 8px;
			font-size: 20px;


		}
		#container
		{
			width: 50%;
			margin: 100px auto;
			border: solid 8px;

		}
		h1, h2
		{
			margin-top: 80px;
			text-align: center;
		}
		a.button:link
		{
			text-decoration: none;

		}
		#indice
		{
			text-align: center;
			
		}

		
	</style>
</head>
<body>
	<h1>Operação do Cadastro de Veículos</h1>
	<div id="container">

		<h2>Escolha uma Opção:</h2>
		<div id="indice">
			<button><a href="cadastrar.php" class="button" style="color: #000">Cadastrar</a></button>
			<button><a href="busca.php"  class="button"  style="color: #000">Pesquisar</a></button>
			<button><a href="busca.php"  class="button"  style="color: #000">Atualizar</a></button>
		</div>
	</div>
</body>
</html>