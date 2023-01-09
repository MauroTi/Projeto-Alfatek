
<form action="insert.php" method="post">
    <label for="id">ID:</label>
  <input type="text" id="id" name="id">
  <br>
  <label for="nome">Nome da peça:</label>
  <input type="text" id="nome" name="nome">
  <br>
  <label for="codigo">Código da peça:</label>
  <input type="text" id="codigo" name="codigo">
  <br>
  <label for="quantidade">Quantidade de peças:</label>
  <input type="number" id="quantidade" name="quantidade">
  <br>
  <label for="os">Ordem de Serviço:</label>
  <input type="number" id="os" name="os">
  <br>
  <input type="submit" value="Cadastrar">
</form>

<?php
include('funcoes/conecta.php');

if(isset($_GET)) {
    // constrói a consulta SQL de inserção
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $codigo = $_GET['codigo'];
    $quantidade = $_GET['quantidade'];
    $os = $_GET['os'];
    $sql = "INSERT INTO pecas (id, nome, codigo, quantidade,os) VALUES ('$id' , '$nome', '$codigo', '$quantidade', '$os')";
}
  

// verifica se o formulário foi enviado
/*if (isset($_POST['nome']) && isset($_POST['codigo']) && isset($_POST['quantidade']) && isset($_POST['os'])) {
  // recebe os dados do formulário
  $nome = $_POST['nome'];
  $codigo = $_POST['codigo'];
  $quantidade = $_POST['quantidade'];
  $os = $_POST['os'];

  // executa a consulta
 // mysqli_query($conn, $sql);
}*/
?>
