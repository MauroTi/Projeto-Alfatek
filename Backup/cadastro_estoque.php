
<form action="cadastrar_peca.php" method="post">
  <label for="nome">Nome da peça:</label>
  <input type="text" id="nome" name="nome">
  <br>
  <label for="codigo">Código da peça:</label>
  <input type="text" id="codigo" name="codigo">
  <br>
  <label for="quantidade">Quantidade de peças:</label>
  <input type="number" id="quantidade" name="quantidade">
  <br>
  <label for="quantidade">Ordem de Serviço:</label>
  <input type="number" id="os" name="os">
  <br>
  <input type="submit" value="Cadastrar">
</form>

<?php
include('funcoes/conecta.php');
// conecta ao banco de dados
//$conn = mysqli_connect('localhost', '', '', 'pecas');
//$link = mysqli_connect('127.0.0.1','root','','pecas');
//mysqli_set_charset($link, 'utf8');
if(isset($_GET)) {
    // constrói a consulta SQL de inserção
  $nome = $_GET['nome'];
  $codigo = $_GET['codigo'];
  $quantidade = $_GET['quantidade'];
  $os = $_GET['os'];
  $sql = "INSERT INTO pecas (nome, codigo, quantidade,os) VALUES ('$nome', '$codigo', '$quantidade', '$os')";
}
   /* if(!$link){
      // Matando o script e imprimindo o erro
    die('Erro: '.mysqli_connect_error());*/

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
