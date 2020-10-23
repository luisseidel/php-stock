<?php

    require_once 'db_connection.php';

    session_start();
    
    if (isset($_POST['btn-entrar'])){
        $erros = array();

        $login = mysqli_escape_string($dbconnect, $_POST['login']);
        $senha = mysqli_escape_string($dbconnect, $_POST['senha']);

            if(empty($login) or empty($senha)):
                $erros[] = "<li>O campo login/senha precisa(m) ser preenchido(s)!</li>";
            else:
                $sql = "SELECT u.* FROM usuarios u WHERE u.login = '$login' ";
                $resultado = mysqli_query($dbconnect, $sql);

                while($row = mysqli_fetch_array($resultado)) {
                    if (password_verify($senha, $row['senha'])) {
                        $_SESSION['logado'] = true;
                        $_SESSION['id_usuario'] = $dados['id_usuario'];                            
                        header('Location: ./pages/home.php');
                    }
                }

                $erros[] = "<li>Usuário e senha não conferem</li>";
            endif;
        mysqli_close($dbconnect);
    }
?>

<div class="login">

    <?php 
        if(!empty($erros)) {
            foreach($erros as $erro) {
                echo $erro;
            }
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>"
        method="POST">

        <input type="text" placeholder="Login (email@email.com)" name="login">
        <input type="password" placeholder="Senha" name="senha">

        <button type="submit" name="btn-entrar">
            Login
            <i class="fas fa-sign-in-alt"></i>
        </button>
    </form>
</div>