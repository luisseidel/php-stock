<?php
    //sessão
    session_start();

    //verificacao
    if (!isset($_SESSION['logado'])) {
        header('Location: ./index.php');
    }

?>

<?php include_once "./includes/header.php" ?>
    
<h1>Here goes the dashboard</h1>


<?php include_once "./includes/footer.php" ?>