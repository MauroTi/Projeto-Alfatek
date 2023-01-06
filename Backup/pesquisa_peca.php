<!-- formulário de pesquisa de peças -->
<form action="pesquisar_peca.php" method="get">
  <label for="termo">Pesquisar por:</label>
  <input type="text" id="termo" name="termo">
  <br>
  <input type="submit" value="Pesquisar">
</form>

<?php
// conecta ao banco de dados
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
