<?php

include('funcoes/conecta.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
$observacoes = isset($_GET['observacoes']) ? $_GET['observacoes'] : '';

$query = "UPDATE pecas SET observacoes = '$observacoes' WHERE id = $id";

if(mysqli_query(conecta(), $query)) {
  echo "Observações atualizadas com sucesso!";
} else {
  echo "Erro ao atualizar observações: " . mysqli_error(conecta());
}

mysqli_close(conecta());

?>
