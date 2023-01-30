<?php 
function auth_user($username, $password) {
    $link = conecta(); //Chamando a função conecta

    // Verifica se as informações de login são válidas
    $query = "SELECT * FROM pecas WHERE usuario = '$username' AND senha = '$password'";
    $result = $link->query($query);

    if ($result->num_rows > 0) {
        // Iniciar sessão e armazenar o nome do usuário logado
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['usuario'];
        mysqli_close($link);
        return true;
    } else {
        mysqli_close($link);
        return false;
    }
}
?>