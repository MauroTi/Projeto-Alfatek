
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Busca de Veículos</title>
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
			<h1>Busca de Veículos</h1>
			<form action="pesquisa.php">
				<table border="8" class="centro">
					
					<tr>
						<th>Marca</th>
						<td><input type="text" name="marca"></td>
					</tr>
					<tr>
						<th>Modelo</th>
						<td><input type="text" name="modelo"></td>
					</tr>
					<tr>
						<th>Cor</th>
						<td><input type="text" name="cor"></td>
					</tr>
					<tr>
						<th>Ano</th>
						<td>
							<select name="ano">
								<option value="">Escolha o Ano</option>
								<?php 
								$ano_atual = date('Y');

								for ($i=0; $i <= 120; $i++) { 
									$result = ($ano_atual - $i);
									echo "<option value='$result'>$result</option>";
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<th>Placa</th>
						<td><input type="text" name="placa" maxlength="7" style="text-transform: uppercase;"></td>
					</tr>
					<tr>
						<th>Renavan</th>
						<td><input type="text" name="renavan" maxlength="11"></td>
					</tr>
					<tr>
						<th>Tipo de Câmbio</th>
						<td>
							<select name="cambio">
							<option value="">Escolha o Tipo de Câmbio</option>
							<option>Automático</option>
							<option>Manual</option>							
						</select>
					</td>
					</tr>
					<tr>
						<td  colspan="2">
							<button>Pesquisar</button>
						</td>
					</tr>
				</table>
				<div class="centro" id="botoes">
					
					<tr>
						<td><button class="botoes_footer" style="border-radius: 10px ;"><a href="index.php" style="color: #000;">Início</a></button></td>
						<td><button class="botoes_footer" style="border-radius: 10px;"><a href="cadastrar.php" style="color: #000;">Cadastrar</a></button></td>
						<td><button class="botoes_footer" style="border-radius: 10px;"><a href="busca.php" style="color: #000;">Atualizar</a></button></td>
					</tr>

				</div>
			</form>
		</div>
	</div>
</body>
</html>