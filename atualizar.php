<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atualização de Veículos</title>
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

</style>
<body>
	<div class="container">
		<div class="centro">			
			<h1>Atualização de Veículos</h1>
			<form>
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
							<select>
								<option value="ano">Escolha o Ano</option>
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
							<select>
							<option value="cambio">Escolha o Tipo de Câmbio</option>
							<option>Automático</option>
							<option>Manual</option>							
						</select>
					</td>
					</tr>
					<tr>
						<td  colspan="2">
							<button>Atualizar</button>
						</td>
					</tr>


				</table>

			</form>
		</div>
	</div>
</body>
</html>