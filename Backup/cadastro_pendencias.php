<!-- formulário de cadastro de peças -->
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
  <input type="submit" value="Cadastrar">
</form>

<?php
include('funcoes/conecta.php');
// conecta ao banco de dados
//$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
//function conecta(){
  //  $link = mysqli_connect('127.0.0.1','root','','pecas');
  //  mysqli_set_charset($link, 'utf8');

   /* if(!$link){
      // Matando o script e imprimindo o erro
      die('Erro: '.mysqli_connect_error());
 //   }*/

    /*return $link;

// verifica se o formulário foi enviado
if (isset($_POST['nome']) && isset($_POST['codigo']) && isset($_POST['quantidade'])) {
  // recebe os dados do formulário
  $nome = $_POST['nome'];
  $codigo = $_POST['codigo'];
  $quantidade = $_POST['quantidade'];

  // constrói a consulta SQL de inserção
  $sql = "INSERT INTO pecas (nome, codigo, quantidade) VALUES ('$nome', '$codigo', '$quantidade')";

  // executa a consulta
  mysqli_query($link, $sql);
}*/
?>
