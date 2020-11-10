<?php require_once '../session/db_connection.php';

//INCLUIR
if (isset($_POST['btn-salvar'])) {
    $nome = mysqli_escape_string($dbconnect, $_POST['nome']);
    $login = mysqli_escape_string($dbconnect, $_POST['login']);
    $senha = password_hash(mysqli_escape_string($dbconnect, $_POST['senha']), PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, login, senha) VALUES ('$nome', '$login', '$senha')";

    if (mysqli_query($dbconnect, $sql)) {
        //Registro inserido com sucesso!
        header("Location: ./list.php");
    } else {
        //Erro ao inserir registro!
        header("Location: ./list.php");
    }
}


//EDITAR
if (isset($_POST['btn-editar'])) {

    $id = mysqli_escape_string($dbconnect, $_POST['id_usuario']);
    $nome = mysqli_escape_string($dbconnect, $_POST['nome']);
    $login = mysqli_escape_string($dbconnect, $_POST['login']);
    if (!is_null($_POST['senha']) && !empty($_POST['senha'])) {
        $senha = password_hash(mysqli_escape_string($dbconnect, $_POST['senha']), PASSWORD_DEFAULT);
    }

    if (!is_null($id) && !empty($id)) {
        $sql = "UPDATE usuarios SET nome='$nome', login='$login', senha='$senha' WHERE id_usuario = '$id'";

        if (mysqli_query($dbconnect, $sql)) {
            //Atualizado com sucesso!
            header("Location: ./list.php");
        } else {
            //Erro ao atualizar registro!
            header("Location: ./list.php");
        }
    }
}


//EXCLUIR
if (isset($_POST['btn-excluir'])) {

    $id = mysqli_escape_string($dbconnect, $_POST['id_usuario']);
    $sql = 'DELETE FROM usuarios WHERE id_usuario = '.$id;

    if (mysqli_query($dbconnect, $sql)) {
        //Registro excluído!
        header("Location: list.php");
    } else {
        //Erro ao excluir registro!
        header("Location: list.php");
    }
}

?>