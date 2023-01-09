<?php 
if (isset($_GET['msg'])) {
	echo '<h2>'. $_GET['msg'] . '</h2>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Pendências</title>
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
		width: 70%;
		height: 40px;
		margin: 0px auto;
	}
	.botoes_footer
	{
		width: auto;

	}
	a:link
	{
		text-decoration: none;
	}

</style>
<body>
	<div class="container">
		<div class="centro">			
			<h1>Cadastro de Pendências</h1>
			<form action="insert.php">
				<table border="8" class="centro">
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
					<tr>
						<th>Código</th>
						<td><input type="text" name="Codigo" value="<?php echo $_GET['codigo']; ?>"></td>
					</tr>
					<tr>
						<th>Nome da Peça</th>
						<td><input type="text" name="Nome da peca" value="<?php echo $_GET['nome']; ?>"></td>
					</tr>
					<tr>
						<th>Quantidade</th>
						<td><input type="text" name="Quantidade" maxlength="3" value="<?php echo $_GET['quantidade']; ?>"></td>
					</tr>
					<tr>
						<th>Ordem de Serviço</th>
						<td><input type="text" name="os" maxlength="6" value="<?php echo $_GET['os']; ?>"></td>
					</tr>
					<tr>
						<td  colspan="2">
							<button>Cadastrar</button>
						</td>
					</tr>
				</table>
				<div class="centro" id="botoes">
					
					<tr>
						<td><button class="botoes_footer" style="border-radius: 10px ;"><a href="index.php" style="color: #000;">Início</a></button></td>
						<td><button class="botoes_footer" style="border-radius: 10px;"><a href="cadastrar_estoque.php" style="color: #000;">Cadastrar Estoque</a></button></td>
						<td><button class="botoes_footer" style="border-radius: 10px;"><a href="lista_pendencias.php" style="color: #000;">Lista Pendências</a></button></td>
						<td><button class="botoes_footer" style="border-radius: 10px;"><a href="lista_estoque.php" style="color: #000;">Lista Estoque</a></button></td>
					</tr>

				</div>
			</form>
		</div>
	</div>
</body>
</html>