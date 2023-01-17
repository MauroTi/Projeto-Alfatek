<?php
function changeButtonColor() {
    $current_page = basename($_SERVER['PHP_SELF']);
    switch ($current_page) {
        case "index.php":
            echo '<script>document.getElementById("index").style.backgroundColor = "#B0C4DE";</script>';
            break;
        case "cadastrar_estoque.php":
            echo '<script>document.getElementById("cadastro_estoque").style.backgroundColor = "#B0C4DE";</script>';
            break;
        case "cadastrar_pendencias.php":
            echo '<script>document.getElementById("cadastro_pendencias").style.backgroundColor = "#B0C4DE";</script>';
            break;
        case "lista_pendencias.php":
            echo '<script>document.getElementById("pendencias").style.backgroundColor = "#B0C4DE";</script>';
            break;
        case "lista_estoque.php":
            echo '<script>document.getElementById("pecas").style.backgroundColor = "#B0C4DE";</script>';
            break;
    }
}
?>                                                                                                                                                                                                                                                                                                                