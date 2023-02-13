<?php
include('funcoes/conecta.php');

$id = mysqli_real_escape_string(conecta(), $_POST['id']);
if (!empty($_POST['nome'])) {
    $nome = mysqli_real_escape_string(conecta(), $_POST['nome']);
} else {
    echo "<script>alert('Todos os campos devem ser preenchidos'); window.location.href = 'cadastrar.php';</script>";
    exit;
}

if (!empty($_POST['codigo'])) {
    $codigo = mysqli_real_escape_string(conecta(), $_POST['codigo']);
} else {
    echo "<script>alert('Todos os campos devem ser preenchidos'); window.location.href = 'cadastrar.php';</script>";
    exit;
}

if (!empty($_POST['quantidade'])) {
    $quantidade = mysqli_real_escape_string(conecta(), $_POST['quantidade']);
} else {
    echo "<script>alert('Todos os campos devem ser preenchidos'); window.location.href = 'cadastrar_estoque.php';</script>";
    exit;
}

if (isset($_POST['data_pecas'])) {
    $data_pecas = mysqli_real_escape_string(conecta(), $_POST['data_pecas']);
}


$query = "INSERT INTO pecas (id,nome,codigo,quantidade,data_pecas) VALUES ('$id','$nome','$codigo','$quantidade',now())";

$resultado = mysqli_query(conecta(), $query);
if ($resultado == true && $resultado != "") {
    echo "<script>alert('Cadastro efetuado com sucesso!'); window.location.href='lista_estoque.php';</script>";
} else {
    echo "Erro: " . mysqli_error(conecta());
}
?>
<script>
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("nome").value = "<?php echo isset($_POST['nome']) ? $_POST['nome'] : ''; ?>";
  document.getElementById("codigo").value = "<?php echo isset($_POST['codigo']) ? $_POST['codigo'] : ''; ?>";
  document.getElementById("quantidade").value = "<?php echo isset($_POST['quantidade']) ? $_POST['quantidade'] : ''; ?>";
  document.getElementById("data_pecas").value = "<?php echo isset($_POST['data_pecas']) ? $_POST['data_pecas'] : ''; ?>";
});
</script>
