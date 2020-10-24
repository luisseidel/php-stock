<?php

    require_once 'db_connection.php';

    session_start();
    
    if (isset($_POST['entrar'])){
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

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Acesse</h3>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <div class="input-field col s12">
                    <input type="text" name="login" id="login">
                    <label for="login">Login</label>
                </div>

                <div class="input-field col s12">
                    <input type="password" name="senha" id="senha">
                    <label for="senha">Senha</label>
                </div>
        
                <button type="submit" name="entrar" class="btn"> entrar
                    <i class="material-icons">login</i>
                </button>
        </form>

    </div>
</div>