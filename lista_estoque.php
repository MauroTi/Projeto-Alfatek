
<!DOCTYPE html>
<html>
<head>
  <title>Lista de Compras</title>
  <meta charset="utf-8">
  <link href="estilo_lista.css" rel="stylesheet">

</head>
<body class="lista_estoque">
  <?php

include ('funcoes/logo.php'); 
  include('funcoes/conecta.php');

  
  $id = isset($_GET['id']) ? $_GET['id'] : '';
$nome = isset($_GET['nome']) ? $_GET['nome'] : '';
$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : '';
$quantidade = isset($_GET['quantidade']) ? $_GET['quantidade'] : '';
$data_pecas = isset($_GET['data_pecas']) ? $_GET['data_pecas'] : '';




  $query = "SELECT * FROM pecas WHERE id LIKE '%$id%' AND nome LIKE '%$nome%' AND codigo LIKE '%$codigo%' AND quantidade LIKE '%$quantidade%' AND data_pecas LIKE '%$data_pecas%'";

  $resultado = mysqli_query(conecta(), $query);

  $linhas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
  
  ?>
  <div class="centro tabela-container">
    <h1>Lista de Compras</h1>
  </div>
  <div class="centro tabela-container" id="botoes">

   <?php
   include 'botoes.php';
   ?>


 </div>
 <table class="tabela tabela-container" border="1">
  <?php
  if(isset($linhas)) {
    ?>
    <tr>
      <th>Peça</th>
      <th>Código</th>
      <th>Quantidade</th>
      <th>Data</th>
      <th>Deletar</th>
      <th>Atualizar</th>

    </tr>
    <?php
    foreach($linhas as $linha) {
      if(empty($linha['nome'] && $linha['codigo'] && $linha['quantidade'])){

    continue;
  }

  

      echo '<tr>';
      echo '<td>'.(!empty($linha['nome']) ? $linha['nome'] : '-').'</td>';
      echo '<td>'.(!empty($linha['codigo']) ? $linha['codigo'] : '-').'</td>';
      echo '<td>'.(!empty($linha['quantidade']) ? $linha['quantidade'] : '-').'</td>';
      echo '<td>'.(!empty($linha['data_pecas']) ? $linha['data_pecas'] : '-').'</td>';
      echo '<td><button class="excluir" type="button" onclick="excluir('.$linha['id'].');">Apagar Registro</button></td>';
      echo '<td>
      <a href="atualizar_estoque.php?id='.$linha['id'].'& nome='.$linha['nome'].'& codigo='.$linha['codigo'].'& quantidade='.$linha['quantidade'].'"class="no-decoration">Editar.</a>

      </td>';

      echo '</tr>';
    }
  }
  ?>
</table>


<script type="text/javascript">
  function excluir(id){
    del = confirm('Deseja excluir o registro '+id+'?');
    if(del == true){
      window.location.href = 'delete_estoque.php?id='+id;
    }
  }

</script>
<?php include ('funcoes/changeButtonColor.php');
changeButtonColor("lista_estoque.php");
?>

</body>
</html>