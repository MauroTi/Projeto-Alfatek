<?php
// conecta ao banco de dados
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

// recebe o termo de pesquisa
$termo = $_GET['termo'];

// escapa o termo de pesquisa para evitar SQL injection
$termo_escaped = mysqli_real_escape_string($conn, $termo);

// constrói a consulta SQL
$sql = "SELECT * FROM pecas WHERE nome LIKE '%$termo_escaped%' OR codigo LIKE '%$termo_escaped%' OR quantidade LIKE '%$termo_escaped%'";

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
    echo 'Quantidade: ' . $
