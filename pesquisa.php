
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
		
		$marca = $_GET['marca'];
		$modelo = $_GET['modelo'];
		$cor = $_GET['cor'];
		$ano = $_GET['ano'];
		$placa = $_GET['placa'];
		$renavan = $_GET['renavan'];
		$cambio = $_GET['cambio'];

		$query = "SELECT * FROM carros WHERE  marca LIKE '%".$marca."%' AND modelo LIKE '%".$modelo."%' AND cor LIKE '%".$cor."%' AND ano LIKE '%".$ano."%' AND placa LIKE '%".$placa."%'AND renavan LIKE '%".$renavan."%' AND cambio LIKE '%".$cambio."%'";
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
				<th>Id</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Cor</th>
				<th>Ano</th>
				<th>Placa</th>
				<th>Renavan</th>
				<th>Cambio</th>
				<th>Deletar</th>
				<th>Atualizar</th>
				
			</tr>
			<?php
			foreach($linhas as $linha) {
				echo '<tr>';
				echo '<td>'.$linha['id'].'</td>';
				echo '<td>'.$linha['marca'].'</td>';
				echo '<td>'.$linha['modelo'].'</td>';
				echo '<td>'.$linha['cor'].'</td>';
				echo '<td>'.$linha['ano'].'</td>';
				echo '<td>'.$linha['placa'].'</td>';
				echo '<td>'.$linha['renavan'].'</td>';
				echo '<td>'.$linha['cambio'].'</td>';
				echo '<td><button class="excluir" type="button" onclick="excluir('.$linha['id'].');">Apagar Registro</button></td>';
				echo '<td>
				<a href="atualizar.php?id='.$linha['id'].'& marca='.$linha['marca'].'& modelo='.$linha['modelo'].'& cor='.$linha['cor'].'& ano='.$linha['ano'].'& placa='.$linha['placa'].'& renavan='.$linha['renavan'].'& cambio='.$linha['cambio'].'">Editar.</a>

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