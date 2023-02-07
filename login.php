<?php
include 'funcoes/conecta.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(empty($usuario) || empty($senha)){
    $errorMessage = 'Por favor, preencha todos os campos';
} else {
    $resultado = mysqli_query(conecta(), "SELECT * FROM pecas WHERE usuario = '$usuario' AND senha = '$senha'");
    $usuario = mysqli_fetch_assoc($resultado);
    if($usuario){
        $_SESSION['login'] = true;
        header('Location: index.php');
    }else{          
        $errorMessage = 'Usuário ou senha inválidos';
    }
}
echo $errorMessage;