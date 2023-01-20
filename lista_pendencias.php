
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Pendências</title>
	<meta charset="utf-8">
	<link href="estilo_lista.css" rel="stylesheet">
	
</head>
<body class="lista_pendencias">
	<?php

	include ('funcoes/logo.php'); 
	include('funcoes/conecta.php');


	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$nome_pendencias = isset($_GET['nome_pendencias']) ? $_GET['nome_pendencias'] : '';
	$codigo_pendencias = isset($_GET['codigo_pendencias']) ? $_GET['codigo_pendencias'] : '';
	$quantidade_pendencias = isset($_GET['quantidade_pendencias']) ? $_GET['quantidade_pendencias'] : '';
	$os_pendencias = isset($_GET['os_pendencias']) ? $_GET['os_pendencias'] : '';
	$data_pendencias = isset($_GET['data_pendencias']) ? $_GET['data_pendencias'] : '';


	$query = "SELECT * FROM pecas WHERE id LIKE '%$id%' AND nome_pendencias LIKE '%$nome_pendencias%' AND codigo_pendencias LIKE '%$codigo_pendencias%' AND quantidade_pendencias LIKE '%$quantidade_pendencias%' AND os_pendencias LIKE '%$os_pendencias%' AND data_pendencias LIKE '%$data_pendencias%'";

	$resultado = mysqli_query(conecta(), $query);

	$linhas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
	
	?>
	<div class="centro tabela-container">
		<h1>Lista de Pendências</h1>
	</div>
	
	<div class="centro tabela-container" id="botoes">

		<?php
		include 'botoes.php';
		?>

	</div>
	<table class="tabela tabela-container" border="1">
		<?php
		if(isset($linhas)) {
			?>
			<tr>
				<th>Peça</th>
				<th>Código</th>
				<th>Quantidade</th>
				<th>Ordem de Serviço</th>
				<th>Data</th>
				<th>Deletar</th>
				<th>Atualizar</th>
				
			</tr>
			<?php
			foreach($linhas as $linha) {

				if(empty($linha['nome_pendencias'] && $linha['codigo_pendencias'] && $linha['quantidade_pendencias'])){

					continue;
				}

				echo '<tr>';
				echo '<td>'.(!empty($linha['nome_pendencias']) ? $linha['nome_pendencias'] : '-').'</td>';
				echo '<td>'.(!empty($linha['codigo_pendencias']) ? $linha['codigo_pendencias'] : '-').'</td>';
				echo '<td>'.(!empty($linha['quantidade_pendencias']) ? $linha['quantidade_pendencias'] : '-').'</td>';
				echo '<td>'.(!empty($linha['os_pendencias']) ? $linha['os_pendencias'] : '-').'</td>';
				echo '<td>'.(!empty($linha['data_pendencias']) ? $linha['data_pendencias'] : '-').'</td>';
				echo '<td><button class="excluir" type="button" onclick="excluir('.$linha['id'].');">Apagar Registro</button></td>';
				echo '<td> <a href="atualizar_pendencias.php?id='.$linha['id'].'&nome_pendencias='.$linha['nome_pendencias'].'&codigo_pendencias='.$linha['codigo_pendencias'].'&quantidade_pendencias='.$linha['quantidade_pendencias'].'&os_pendencias='.$linha['os_pendencias'].'"class="no-decoration">Editar</a> </td>';

				echo '</tr>';
			}
		}
		?>
	</table>
	
	
	<script type="text/javascript">
		function excluir(id){
			del = confirm('Deseja excluir o registro '+id+'?');
			if(del == true){
				window.location.href = 'delete_pendencias.php?id='+id;
			}
		}
	</script>
	<?php include ('funcoes/changeButtonColor.php');
	changeButtonColor("lista_pendencias.php");
	mysqli_close(conecta());
	?>
</body>
</html>