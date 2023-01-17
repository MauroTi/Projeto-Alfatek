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
	<title>Atualizar Pedido de Peças</title>
	<link href="estilo_cadastro.css" rel="stylesheet">
</head>

<body>
	<?php include ('funcoes/logo.php'); ?>
	<div class="container">
		<div class="centro">			
			<h1>Atualizar Pedido de Peças</h1>
			<form action="atualiza_estoque.php">
				<table border="8" class="centro">
					<?php 
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
					} else {
						$id = '';
					}
					if (isset($_GET['nome'])) {
						$nome = $_GET['nome'];
					} else {
						$nome = '';
					}
					if (isset($_GET['codigo'])) {
						$codigo = $_GET['codigo'];
					} else {
						$codigo = '';
					}
					if (isset($_GET['quantidade'])) {
						$quantidade = $_GET['quantidade'];
					} else {
						$quantidade = '';
					}



					?>

					<input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
					<tr>
						<th>Código</th>
						<td><input type="text" name="codigo" maxlength="9" value="<?php echo htmlspecialchars($codigo); ?>"></td>
					</tr>
					<tr>
						<th>Nome da Peça</th>
						<td><input type="text" name="nome" value="<?php echo htmlspecialchars($nome); ?>"></td>
					</tr>
					<tr>
						<th>Quantidade</th>
						<td><input type="text" name="quantidade" maxlength="3" value="<?php echo htmlspecialchars($quantidade); ?>"></td>
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