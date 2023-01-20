<?php
include('funcoes/conecta.php');

$id = mysqli_real_escape_string(conecta(), $_POST['id']);
$nome = mysqli_real_escape_string(conecta(), $_POST['nome']);
$codigo = mysqli_real_escape_string(conecta(), $_POST['codigo']);
$quantidade = mysqli_real_escape_string(conecta(), $_POST['quantidade']);
$data = mysqli_real_escape_string(conecta(), $_POST['data']);

$query = "INSERT INTO pecas (id,nome,codigo,quantidade,data) VALUES ('$id','$nome','$codigo','$quantidade',now())";

$resultado = mysqli_query(conecta(), $query);

if ($resultado == true) {
    echo "<script>alert('Cadastro efetuado com sucesso!'); window.location.href='lista_estoque.php';</script>";
} else {
    echo "Erro: " . mysqli_error(conecta());
}
?>


