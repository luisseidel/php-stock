<?php include_once "../includes/header.php" ;
      include_once "../session/db_connection.php";

      if (isset($_GET['id'])) {
        $id = mysqli_escape_string($dbconnect, $_GET['id']);

        $sql = "SELECT * FROM usuarios WHERE id_usuario = '$id'";
        $resultado = mysqli_query($dbconnect, $sql);
        $dados = mysqli_fetch_array($resultado);

      }
?>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Editar de Usuários</h3>
            
            <form action="actions.php" method="POST">
                <div class="input-field col s12">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario']?>">
                    <input type="text" name="id" value="<?php echo $dados['id_usuario']?>" disabled>
                    <label for="nome">Id</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">title</i>
                    <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']?>" class="char-count" data-length="255">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">mail</i>
                    <input type="email" name="login" id="login" value="<?php echo $dados['login'] ?>" class="validate char-count" data-length="255">
                    <label for="nome">Login</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="senha" id="senha" class="char-count" >
                    <label for="nome">Senha</label>
                </div>

                <?php include_once '../includes/update-buttons.php' ?>

            </form>
        </div>
    </div>

<?php include_once "../includes/footer.php" ?>