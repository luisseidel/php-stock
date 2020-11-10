<?php include_once "../includes/header.php" ?>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <table class="highlight responsive-table">
                <h3 class="light">Lista de Usuários</h3>
                <a href="./create.php" class="btn waves-effect waves-light">
                    Adicionar 
                    <i class="material-icons right">add</i>
                </a>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        require_once '../session/db_connection.php';
                        $sql = "SELECT u.* FROM usuarios u WHERE u.administrador <> '1'";
                        $resultado = mysqli_query($dbconnect, $sql) or die (mysqli_error($dbconnect));
                        
                        if (mysqli_num_rows($resultado) > 0):

                            while ($row = mysqli_fetch_array($resultado)): ?>
                                <tr>
                                    <td> <?php echo $row['id_usuario'] ?> </td>
                                    <td> <?php echo $row['nome'] ?>       </td>
                                    <td> <?php echo $row['login'] ?>      </td>
                                    <td>
                                        <a id='btn-editar' href="update.php?id=<?php echo $row['id_usuario'] ?>" name="btn-editar" class="btn-floating btn-small">
                                            <i class='material-icons orange'>edit</i>
                                        </a>
                                        <a id='btn-excluir' href="#modal<?php echo $row['id_usuario'] ?>" class='waves-effect waves-light btn-floating btn-small modal-trigger'>
                                            <i class='material-icons red'>delete</i>
                                        </a>

                                        <div id="modal<?php echo $row['id_usuario'] ?>" class="modal blue-grey darken-4">
                                            <div class="modal-content">
                                            <h4>Confirmar Exclusão</h4>
                                            <p>Você confirma a exclusão do registro?</p>
                                            </div>
                                            <div class="modal-footer blue-grey darken-4">
                                                <form action="actions.php" method="POST">
                                                    <a href="#!" class="btn modal-close waves-effect waves-light">
                                                        <i class="material-icons left">cancel</i>
                                                        Cancelar
                                                    </a>
                                                    <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']?>">
                                                    <button type="submit" name="btn-excluir" class="btn red darken-4 waves-effect waves-light">
                                                        <i class="material-icons left">delete</i>
                                                        Excluir
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else:?>
                            <tr>
                                <td colspan="4" class="center">Nenhum registro encontrado!</td>
                            </tr>
                        <?php endif;?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        tippy('#btn-editar', {
            content: 'Editar',
        });

        tippy('#btn-excluir', {
            content: 'Excluir',
        });
    </script>

<?php include_once "../includes/footer.php" ?>