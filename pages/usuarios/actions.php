<?php 

require_once '../session/db_connection.php';

if (isset($_POST['btn-salvar'])) {
    $nome = mysqli_escape_string($dbconnect, $_POST['nome']);
    $login = mysqli_escape_string($dbconnect, $_POST['login']);
    $senha = password_hash(mysqli_escape_string($dbconnect, $_POST['senha']), PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, login, senha) VALUES ('$nome', '$login', '$senha')";

    if (mysqli_query($dbconnect, $sql)) {
        header("Location: ./list.php");
    } else {
        header("Location: ./list.php");
    }
}

if (isset($_POST['btn-editar'])) {
    $id = mysqli_escape_string($dbconnect, $_POST['id_usuario']);
    $nome = mysqli_escape_string($dbconnect, $_POST['nome']);
    $login = mysqli_escape_string($dbconnect, $_POST['login']);

    echo 'ID:    '.$id;
    echo '<br>Nome:  '.$nome;
    echo '<br>Login: '.$login;
    //header('Location: ./edit.php');
}

if (isset($_POST['btn-excluir'])) {

    $id = mysqli_escape_string($dbconnect, $_POST['id_usuario']);
    $sql = 'DELETE FROM usuarios WHERE id_usuario = '.$id;

    if (mysqli_query($dbconnect, $sql)) {
        header("Location: list.php");
    } else {
        header("Location: list.php");
    }
}

?>