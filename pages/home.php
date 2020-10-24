<?php
    //sessão
    session_start();

    //verificacao
    if (!isset($_SESSION['logado'])) {
        header('Location: ./index.php');
    }

?>

<?php include_once "./includes/header.php" ?>
    
        <a href="./usuarios/list.php">Cadastro Usuários</a>


<?php include_once "./includes/footer.php" ?>