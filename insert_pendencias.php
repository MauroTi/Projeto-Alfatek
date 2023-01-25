<?php
include('funcoes/conecta.php');

$id = mysqli_real_escape_string(conecta(), $_POST['id']);
$nome_pendencias = mysqli_real_escape_string(conecta(), $_POST['nome_pendencias']);
$codigo_pendencias = mysqli_real_escape_string(conecta(), $_POST['codigo_pendencias']);
$quantidade_pendencias = mysqli_real_escape_string(conecta(), $_POST['quantidade_pendencias']);
$os_pendencias = mysqli_real_escape_string(conecta(), $_POST['os_pendencias']);
$data_pendencias = mysqli_real_escape_string(conecta(), $_POST['data_pendencias']);

$query = "INSERT INTO pecas (id,nome_pendencias,codigo_pendencias,quantidade_pendencias,os_pendencias, data_pendencias) VALUES ('$id','$nome_pendencias','$codigo_pendencias','$quantidade_pendencias','$os_pendencias',now())";

$resultado = mysqli_query(conecta(), $query);
if ($resultado == true && $resultado != "") {
    echo "<script>alert('Cadastro efetuado com sucesso!'); window.location.href='lista_pendencias.php';</script>";
} else {
    echo "Erro: " . mysqli_error(conecta());
}
?>
<script>
 
</script>