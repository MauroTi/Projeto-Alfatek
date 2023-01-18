<?php
include('funcoes/conecta.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
$nome = isset($_GET['nome']) ? $_GET['nome'] : '';
$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : '';
$quantidade = isset($_GET['quantidade']) ? $_GET['quantidade'] : '';

$query = "UPDATE pecas SET nome = '".$nome."', codigo ='".$codigo."', quantidade ='".$quantidade."' WHERE id = '".$id."'";

$resultado = mysqli_query(conecta(), $query);

if ($resultado == true) {
    echo "<script>alert('Cadastro atualizado com sucesso!'); window.location.href='lista_estoque.php';</script>";
} else {
    echo "Erro: " . mysqli_error(conecta());
}
?>
