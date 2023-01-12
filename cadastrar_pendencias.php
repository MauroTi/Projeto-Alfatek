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
	<link href="estilo_cadastro.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="centro">			
			<h1>Cadastro de Pendências</h1>
			<form action="insert_pendencias.php" method="post" autocomplete="off">
				<table border="8" class="centro">
					<?php 
					$id = $nome_pendencias = $codigo_pendencias = $quantidade_pendencias = $os_pendencias = "";

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nome_pendencias = isset($_POST['nome_pendencias']) ? $_POST['nome_pendencias'] : '';
$codigo_pendencias = isset($_POST['codigo_pendencias']) ? $_POST['codigo_pendencias'] : '';
$quantidade_pendencias = isset($_POST['quantidade_pendencias']) ? $_POST['quantidade_pendencias'] : '';
$os_pendencias = isset($_POST['os_pendencias']) ? $_POST['os_pendencias'] : '';

					?>

					<input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
					<tr>
						<th>Código</th>
						<td><input type="text" name="codigo_pendencias" maxlength="9" value="<?php echo htmlspecialchars($codigo_pendencias); ?>"></td>
					</tr>
					<tr>
						<th>Nome da Peça</th>
						<td><input type="text" name="nome_pendencias" value="<?php echo htmlspecialchars($nome_pendencias); ?>"></td>
					</tr>
					<tr>
						<th>Quantidade</th>
						<td><input type="text" name="quantidade_pendencias" maxlength="3" value="<?php echo htmlspecialchars($quantidade_pendencias); ?>"></td>
					</tr>
					<tr>
						<th>Ordem de Serviço</th>
						<td><input type="text" name="os_pendencias" maxlength="6" value="<?php echo htmlspecialchars($os_pendencias); ?>"></td>
					</tr>


					<tr>
						<td  colspan="2">
							<button>Cadastrar</button>
						</td>
					</tr>
				</table>
				<div class="centro" id="botoes">
					<?php
					include 'botoes.php';
					?>

				</div>
			</form>
		</div>
	</div>

</body>
</html>