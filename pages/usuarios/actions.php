<?php require_once '../session/db_connection.php';

function clear($input) {
    global $dbconnect;
    //sql injection
    $var = mysqli_escape_string($dbconnect, $input);
    //cross site scripting
    $var = htmlspecialchars($var);
    
    return $var;
}

//INCLUIR
if (isset($_POST['btn-salvar'])) {
    $nome = clear($_POST['nome']);
    $login = clear($_POST['login']);
    $senha = password_hash(clear($_POST['senha']), PASSWORD_DEFAULT);

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

    $id = clear($_POST['id_usuario']);
    $nome = clear($_POST['nome']);
    $login = clear($_POST['login']);
    if (!is_null($_POST['senha']) && !empty($_POST['senha'])) {
        $senha = password_hash(clear($_POST['senha']), PASSWORD_DEFAULT);
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

    $id = clear($_POST['id_usuario']);
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