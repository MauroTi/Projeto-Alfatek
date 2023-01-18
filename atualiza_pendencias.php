<?php 

include('funcoes/conecta.php');


$id = isset($_GET['id']) ? $_GET['id'] : '';
$nome_pendencias = isset($_GET['nome_pendencias']) ? $_GET['nome_pendencias'] : '';
$codigo_pendencias = isset($_GET['codigo_pendencias']) ? $_GET['codigo_pendencias'] : '';
$quantidade_pendencias = isset($_GET['quantidade_pendencias']) ? $_GET['quantidade_pendencias'] : '';
$os_pendencias = isset($_GET['os_pendencias']) ? $_GET['os_pendencias'] : '';



$query = "UPDATE pecas SET nome_pendencias = '".$nome_pendencias."', codigo_pendencias ='".$codigo_pendencias."', quantidade_pendencias ='".$quantidade_pendencias."',os_pendencias ='".$os_pendencias."' WHERE id = '".$id."'";


$resultado = mysqli_query(conecta(), $query);
if ($resultado == true) {
    echo "<script>alert('Cadastro atualizado com sucesso!'); window.location.href='lista_pendencias.php';</script>";
} else {
    echo "Erro: " . mysqli_error(conecta());
}
