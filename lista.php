<?php
// conecta ao banco de dados
$conn = mysqli_connect('127.0.0.1', 'root', '', 'pecas');

//// recebe o termo de pesquisa
$termo = $_GET['pecas'];

// escapa o termo de pesquisa para evitar SQL injection
$termo_escaped = mysqli_real_escape_string($conn, $termo);

// constrói a consulta SQL
$sql = "SELECT * FROM pecas WHERE nome LIKE '%$nome%' OR codigo LIKE '%$codigo%' OR quantidade LIKE '%$quantidade%' OR os LIKE '%$os%'";

// executa a consulta
$result = mysqli_query($conn, $sql);

// verifica se há resultados
if (mysqli_num_rows($result) > 0) {
  // exibe os resultados em uma lista
  echo '<ul>';
  while ($row = mysqli_fetch_assoc($result)) {
    // exibe as informações da peça
    echo '<li>';
    echo 'Nome: ' . $row['nome'] . '<br>';
    echo 'Código: ' . $row['codigo'] . '<br>';
    echo 'Quantidade: ' . $row['quantidade'] . '<br>';
    echo 'Os: ' . $row['os'] . '<br>';
}}