<?php
include('funcoes/conecta.php');

$id = mysqli_real_escape_string(conecta(), $_POST['id']);
$nome = mysqli_real_escape_string(conecta(), $_POST['nome']);
$codigo = mysqli_real_escape_string(conecta(), $_POST['codigo']);
$quantidade = mysqli_real_escape_string(conecta(), $_POST['quantidade']);
$data_pecas = mysqli_real_escape_string(conecta(), $_POST['data_pecas']);

$query = "INSERT INTO pecas (id,nome,codigo,quantidade,data_pecas) VALUES ('$id','$nome','$codigo','$quantidade',now())";

$resultado = mysqli_query(conecta(), $query);



if ($resultado == true) {
    echo "<script>alert('Cadastro efetuado com sucesso!'); window.location.href='lista_estoque.php';</script>";
} else {
    echo "Erro: " . mysqli_error(conecta());
}
?>
<script>
 /* if ($resultado) {
    // Redirect to the "pesquisa.php" page with a success message
    window.location.replace('pesquisa.php?msg=Cadastro efetuado!');

    // Display a confirmation message
    window.alert('Cadastro efetuado com sucesso!');
  } else {
    // Display an error message
    window.alert('Erro ao efetuar o cadastro. Por favor, tente novamente.');
  }*/
</script>



