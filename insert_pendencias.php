<?php
include('funcoes/conecta.php');

$id = mysqli_real_escape_string(conecta(), $_POST['id']);

function redirecionaComMensagem($mensagem) {
    echo "<script>alert('$mensagem'); window.location.href = 'cadastrar_pendencias.php';</script>";
    exit;
}

if (empty($_POST['nome_pendencias']) || empty($_POST['codigo_pendencias']) || empty($_POST['quantidade_pendencias']) || empty($_POST['os_pendencias'])) {
    redirecionaComMensagem('Todos os campos devem ser preenchidos');
}

$nome_pendencias = mysqli_real_escape_string(conecta(), $_POST['nome_pendencias']);
$codigo_pendencias = mysqli_real_escape_string(conecta(), $_POST['codigo_pendencias']);
$quantidade_pendencias = mysqli_real_escape_string(conecta(), $_POST['quantidade_pendencias']);
$os_pendencias = mysqli_real_escape_string(conecta(), $_POST['os_pendencias']);

if (isset($_POST['data_pendencias'])) {
    $data_pendencias = mysqli_real_escape_string(conecta(), $_POST['data_pendencias']);
}


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