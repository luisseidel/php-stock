<?php
    //conexao
    require_once 'db_connection.php';

    //sessão
    session_start();

    //verificacao
    if (!isset($_SESSION['logado'])) {
        header('Location: ./index.php');
    }

    //dados
    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios u where u.id_usuario = '$id'";
    $resultado = mysqli_query($dbconnect, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($dbconnect);
?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bem-vindo!  <?php echo $dados['nome']; ?></h1>

    <a href="logout.php">Sair</a>

</body>
</html>
