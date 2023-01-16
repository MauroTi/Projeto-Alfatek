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
			<form action="atualiza_pendencias.php">
				<table border="8" class="centro">
					<?php 
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
					} else {
						$id = '';
					}
					if (isset($_GET['nome_pendencias'])) {
						$nome_pendencias = $_GET['nome_pendencias'];
					} else {
						$nome_pendencias = '';
					}
					if (isset($_GET['codigo_pendencias'])) {
						$codigo_pendencias = $_GET['codigo_pendencias'];
					} else {
						$codigo_pendencias = '';
					}
					if (isset($_GET['quantidade_pendencias'])) {
						$quantidade_pendencias = $_GET['quantidade_pendencias'];
					} else {
						$quantidade_pendencias = '';
					}
					if (isset($_GET['os_pendencias'])) {
						$os_pendencias = $_GET['os_pendencias'];
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