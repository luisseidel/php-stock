<?php 

require_once '../session/db_connection.php';

if (isset($_POST['btn-salvar'])) {
    $nome = mysqli_escape_string($dbconnect, $_POST['nome']);
    $login = mysqli_escape_string($dbconnect, $_POST['login']);
    $senha = mysqli_escape_string($dbconnect, $_POST['senha']);

    $sql = "INSERT INTO usuarios (nome, login, senha) VALUES ('$nome', '$login', '$senha')";

    if (mysqli_query($dbconnect, $sql)) {
        header("Location: ./list.php?sucesso");
    } else {
        header("Location: ./list.php?error");
    }
}

if (isset($_POST['btn-editar'])) {
    $id = mysqli_escape_string($dbconnect, $_POST['id']);
    $nome = mysqli_escape_string($dbconnect, $_POST['nome']);
    $login = mysqli_escape_string($dbconnect, $_POST['login']);

    header('Location: ./edit.php');
}

if (isset($_POST['btn-excluir'])) {

    $id = mysqli_escape_string($dbconnect, $_POST['id_usuario']);
    $sql = "DELETE FROM usuarios u WHERE u.id_usuario = '$id";

    if (mysqli_query($dbconnect, $sql)) {
        header("Location: list.php?sucesso");
    } else {
        header("Location: list.php?error");
    }
}

?>