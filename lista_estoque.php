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
  $observacoes = isset($_GET['observacoes']) ? $_GET['observacoes'] : '';

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
        <th>Observações</th>
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
        echo '<td><button class="excluir" type="button" onclick="excluir('.$linha['id'].');">Apagar</button></td>';
        echo '<td><a href="atualizar_estoque.php?id='.$linha['id'].'&nome='.$linha['nome'].'&codigo='.$linha['codigo'].'&quantidade='.$linha['quantidade'].'" class="no-decoration">Editar</a></td>';
        echo '<td><div class="observacoes-container">';
        echo '<div class="observacoes-text" id="observacoes_'.$linha['id'].'">'.(!empty($linha['observacoes']) ? $linha['observacoes'] : '-').'</div>';
        echo '<textarea class="observacoes-input" id="observacoes_input_'.$linha['id'].'" style="border: 1px solid #ccc; padding: 5px; width: 300px; height: 100px;">'.(!empty($linha['observacoes']) ? $linha['observacoes'] : '').'</textarea>';
        echo '<button class="salvar" type="button" onclick="salvarObservacoes('.$linha['id'].')">Salvar</button>';
        echo '<button class="editar" type="button" onclick="editarObservacoes('.$linha['id'].')">Editar</button>';
        echo '<button class="excluir" type="button" onclick="excluir('.$linha['id'].');">Excluir</button>';
        echo '</div></td></tr>';




      }
    }
    ?>
  </table>
  <script>
    function excluir(id){
      if(confirm('Deseja realmente excluir esse registro?')){
        window.location.href = "excluir_estoque.php?id=" + id;
      }
    }
    function salvarObservacoes(id) {
      var observacoes = document.getElementById("observacoes_" + id).textContent;
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          alert("Observações salvas com sucesso!");
        }
      };
      xmlhttp.open("GET", "salvar_observacoes.php?id=" + id + "&observacoes=" + observacoes, true);
      xmlhttp.send();
    }

  </script>
</body>
</html>




