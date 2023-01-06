
<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa</title>
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
			width: 40%;
			height: 40px;
			margin: 0px auto;
			margin-bottom: 30px;
		}
		.botoes_footer
		{
			width: 23%;

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

	if(isset($_GET)) {
		
		$nome = $_GET['nome'];
		$codigo = $_GET['codigo'];
		$quantidade = $_GET['quantidade'];
		$os = $_GET['os'];

		$query = "SELECT * FROM pecas WHERE  nome LIKE '%".$nome."%' AND codigo LIKE '%".$codigo."%'AND quantidade LIKE '%".$quantidade."%' AND os LIKE '%".$os."%'";
		$resultado = mysqli_query(conecta(), $query);

		$linhas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
	}
	?>

	<div class="centro" id="botoes">

		<tr>
			<td><button class="botoes_footer" style="border-radius: 10px ;"><a href="index.php" style="color: #000;">Início</a></button></td>
			<td><button class="botoes_footer" style="border-radius: 10px;"><a href="cadastrar.php" style="color: #000;">Cadastrar</a></button></td>
			<td><button class="botoes_footer" style="border-radius: 10px;"><a href="busca.php" style="color: #000;">Atualizar</a></button></td>
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