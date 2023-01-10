
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Pendências</title>
	<meta charset="utf-8">
	<style type="text/css">
		.tabela
		{
			margin: 0px auto; 
		}
		td
		{
			padding: 2px 5px;
			text-align: center;
		}
		#botoes
		{
			width: auto;
			height: 40px;
			margin: 0px auto;
			margin-bottom: 30px;
		}
		.botoes_footer
		{
			width: auto;

		}
		a:link
		{
			text-decoration: none;
		}
		button
		{
			width: 100%;
			height: 40px;
			font-size: 15px;
			font-family: "arial";
			font-weight: bold;
		}
		.centro
		{
			text-align: center;
			margin: 40px auto 40px auto;
		}
	</style>
</head>
<body>
	<?php


	include('funcoes/conecta.php');

		
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
		if (isset($_GET['os'])) {
			$os = $_GET['os'];
		} else {
			$os = '';
		}

		$query = "SELECT * FROM pecas WHERE id LIKE '%$id%' AND nome LIKE '%$nome%' AND codigo LIKE '%$codigo%' AND quantidade LIKE '%$quantidade%' AND os LIKE '%$os%'";

		$resultado = mysqli_query(conecta(), $query);

		$linhas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
	
	?>

	<div class="centro" id="botoes">

		<tr>
			<td><button class="botoes_footer" style="border-radius: 10px ;"><a href="index.php" style="color: #000;">Início</a></button></td>
			<td><button class="botoes_footer" style="border-radius: 10px;"><a href="cadastrar_estoque.php" style="color: #000;">Cadastrar Estoque</a></button></td>
			<td><button class="botoes_footer" style="border-radius: 10px;"><a href="cadastrar_pendencias.php" style="color: #000;">Cadastrar Pendências</a></button></td>
			<td><button class="botoes_footer" style="border-radius: 10px;"><a href="lista_pendencias.php" style="color: #000;">Lista Pendências</a></button></td>
			<td><button class="botoes_footer" style="border-radius: 10px;"><a href="lista_estoque.php" style="color: #000;">Lista Estoque</a></button></td>
		</tr>

	</div>
	<table class="tabela" border="1">
		<?php
		if(isset($linhas)) {
			?>
			<tr>
				<th>Nome</th>
				<th>Código</th>
				<th>Quantidade</th>
				<th>Ordem de Serviço</th>
				<th>Deletar</th>
				<th>Atualizar</th>
				
			</tr>
			<?php
			foreach($linhas as $linha) {

				echo '<tr>';
				echo '<td>'.$linha['nome'].'</td>';
				echo '<td>'.$linha['codigo'].'</td>';
				echo '<td>'.$linha['quantidade'].'</td>';
				echo '<td>'.$linha['os'].'</td>';
				echo '<td><button class="excluir" type="button" onclick="excluir('.$linha['id'].');">Apagar Registro</button></td>';
				echo '<td>
				<a href="atualizar.php?id='.$linha['id'].'& nome='.$linha['nome'].'& codigo='.$linha['codigo'].'& quantidade='.$linha['quantidade'].'& os='.$linha['os'].'">Editar.</a>

				</td>';
				echo '</tr>';
			}
		}
		?>
	</table>
	
	
	<script type="text/javascript">
		function excluir(id){
			del = confirm('Deseja excluir o registro '+id+'?');
			if(del == true){
				window.location.href = 'delete.php?id='+id;
			}
		}
	</script>

</body>
</html>