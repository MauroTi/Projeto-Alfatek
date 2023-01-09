
<?php
include('funcoes/conecta.php');

$id = mysqli_real_escape_string(conecta(), $_POST['id']);
$nome = mysqli_real_escape_string(conecta(), $_POST['nome']);
$codigo = mysqli_real_escape_string(conecta(), $_POST['codigo']);
$quantidade = mysqli_real_escape_string(conecta(), $_POST['quantidade']);
$os = mysqli_real_escape_string(conecta(), $_POST['os']);

$query = "INSERT INTO pecas (id,nome,codigo,quantidade,os) VALUES ('$id','$nome','$codigo','$quantidade','$os')";

$resultado = mysqli_query(conecta(), $query);

if ($resultado) {
	header('Location: pesquisa.php?msg=Cadastro efetuado!');
} else {
	echo 'Erro';
}
?>
<script>
  if ($resultado) {
    // Redirect to the "pesquisa.php" page with a success message
    window.location.replace('pesquisa.php?msg=Cadastro efetuado!');

    // Display a confirmation message
    window.alert('Cadastro efetuado com sucesso!');
  } else {
    // Display an error message
    window.alert('Erro ao efetuar o cadastro. Por favor, tente novamente.');
  }
</script>



