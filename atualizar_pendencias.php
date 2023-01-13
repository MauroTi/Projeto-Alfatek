<?php 
if (isset($_POST['msg'])) {
	echo '<h2>'. $_POST['msg'] . '</h2>';
	error_reporting(0);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atualizar Pendências</title>
	<link href="estilo_cadastro.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="centro">			
			<h1>Atualizar Pendências</h1>
			<form action="atualiza_pendencias.php" method="post">
				<table border="8" class="centro">
					<?php 
					if (isset($_POST['id'])) {
						$id = $_POST['id'];
					} else {
						$id = '';
					}
					if (isset($_POST['nome_pendencias'])) {
						$nome_pendencias = $_POST['nome_pendencias'];
					} else {
						$nome_pendencias = '';
					}
					if (isset($_POST['codigo_pendencias'])) {
						$codigo_pendencias = $_POST['codigo_pendencias'];
					} else {
						$codigo_pendencias = '';
					}
					if (isset($_POST['quantidade_pendencias'])) {
						$quantidade_pendencias = $_POST['quantidade_pendencias'];
					} else {
						$quantidade_pendencias = '';
					}
					if (isset($_POST['os_pendencias'])) {
						$os_pendencias = $_POST['os_pendencias'];
					} else {
						$os_pendencias = '';
					}


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
						<th>OS</th>
						<td><input type="text" name="os_pendencias" maxlength="6" value="<?php echo htmlspecialchars($os_pendencias);?>"></td>
					</tr>
					<tr>
						<td  colspan="2">
							<button>Atualizar</button>
						</td>
					</tr>
				</table>
				<?php 

				include 'botoes.php';
				?>
			</form>
		</div>
	</div>
</body>
</html>