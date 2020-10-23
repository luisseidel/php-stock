<?php
    //sessão
    session_start();

    //verificacao
    if (!isset($_SESSION['logado'])) {
        header('Location: ./index.php');
    }

?>

<?php include_once "./includes/header.php" ?>
    
        <h1>welcome</h1>

        <a href="list-usuarios.php">Cadastro Usuários</a>

<?php include_once "./includes/footer.php" ?>
    
