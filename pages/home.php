<?php
    //sessão
    session_start();

    //verificacao
    if (!isset($_SESSION['logado'])) {
        header('Location: ./index.php');
    }

?>

<?php include_once "./includes/header.php" ?>
    
        


<?php include_once "./includes/footer.php" ?>