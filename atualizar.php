<?php 
if (isset($_GET['msg'])) {
	echo '<h2>'. $_GET['msg'] . '</h2>';
	error_reporting(0);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pedidos de peças</title>
</head>
<style type="text/css">
	.container
	{
		font-family: "tahoma";
		margin: 0px;
		padding: 0px;
	}
	.centro
	{
		text-align: center;
		margin: 40px auto 40px auto;
	}
	table, tr, td, th
	{
		border-radius: 6px;
		height: 40px;
	}

	button
	{
		width: 100%;
		height: 40px;
		font-size: 20px;
		font-family: "arial";
		font-weight: bold;
	}
	input, select
	{
		width: 99%;
		height: 100%;
		font-size: 16px;
		text-align: center;
		text-align-last: center;
	}
	#botoes
	{
		width: 40%;
		height: 40px;
		margin: 0px auto;
	}
	.botoes_footer
	{
		width: 23%;

	}
	a:link
	{
		text-decoration: none;
	}


</style>
<body>
	<div class="container">
		<div class="centro">			
			<h1>Pedidos de peças</h1>
			<form action="atualiza.php">
				<table border="8" class="centro">
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
					<tr>
						<th>Código</th>
						<td><input type="text" name="Codigo" value="<?php echo $_GET['Codigo']; ?>"></td>
					</tr>
					<tr>
						<th>Nome da Peça</th>
						<td><input type="text" name="Nome da peca" value="<?php echo $_GET['Nome da peca']; ?>"></td>
					</tr>
					<tr>
						<th>Modelo do Equipamento</th>
						<td><input type="text" name="Modelo" value="<?php echo $_GET['Modelo']; ?>"></td>
					</tr>
					<tr>
						<th>Quantidade</th>
						<td><input type="text" name="Quantidade" maxlength="7" style="text-transform: uppercase;" value="<?php echo $_GET['Quantidade']; ?>"></td>
					</tr>
					<tr>
						<td  colspan="2">
							<button>Atualizar</button>
						</td>
					</tr>


				</table>
				<div class="centro" id="botoes">
					
					<tr>
						<td><button class="botoes_footer" style="border-radius: 10px ;"><a href="index.php" style="color: #000;">Início</a></button></td>
						<td><button class="botoes_footer" style="border-radius: 10px;"><a href="busca.php" style="color: #000;">Pesquisar</a></button></td>
						<td><button class="botoes_footer" style="border-radius: 10px;"><a href="busca.php" style="color: #000;">Atualizar</a></button></td>
					</tr>

				</div>

			</form>
		</div>
	</div>
</body>
</html>