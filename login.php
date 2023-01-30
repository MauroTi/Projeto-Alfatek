<?php
session_start();

// Verifica se o usuário está logado
if (isset($_SESSION['login'])) {
    header('Location: index.php');
}

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        // Verificação de Login

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $resultado = mysqli_query(conecta(), $query);
        $usuario = mysqli_fetch_assoc($resultado);

        // Verifica se o usuário existe
        if ($usuario) {
            // Login válido
            $_SESSION['login'] = true;
            header('Location: index.php');
        } else {
            // Login inválido
            $errorMessage = 'Usuário ou senha inválidos';
        }
    } elseif (isset($_POST['register'])) {
        // Cadastro de usuário

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // Aqui você precisará salvar os dados do usuário no banco de dados
        $query = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";
        mysqli_query(conecta(), $query);

        $errorMessage = 'Usuário cadastrado com sucesso';
    }
}
?>







	

