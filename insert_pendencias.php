<?php
include('funcoes/conecta.php');

$id = mysqli_real_escape_string(conecta(), $_POST['id']);
$nome_pendencias = mysqli_real_escape_string(conecta(), $_POST['nome_pendencias']);
$codigo_pendencias = mysqli_real_escape_string(conecta(), $_POST['codigo_pendencias']);
$quantidade_pendencias = mysqli_real_escape_string(conecta(), $_POST['quantidade_pendencias']);
$os_pendencias = mysqli_real_escape_string(conecta(), $_POST['os_pendencias']);

$query = "INSERT INTO pecas (id,nome_pendencias,codigo_pendencias,quantidade_pendencias,os_pendencias) VALUES ('$id','$nome_pendencias','$codigo_pendencias','$quantidade_pendencias','$os_pendencias')";

$resultado = mysqli_query(conecta(), $query);

if ($resultado) {
	header('Location: lista_pendencias.php?msg=Cadastro efetuado!');
} else {
	echo 'Erro';
}
?>
<script>
 
</script>