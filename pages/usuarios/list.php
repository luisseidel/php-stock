<?php include_once "../includes/header.php" ?>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <table class="highlight responsive-table">
                <h3 class="light">Lista de Usuários</h3>
                <a href="./edit.php" class="btn waves-effect waves-light">
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
                        $query = mysqli_query($dbconnect, $sql) or die (mysqli_error($dbconnect));
                        while ($row = mysqli_fetch_array($query)) {
                            echo
                            "<tr>
                                <form action='actions.php' method='post'>
                                    <input type='hidden' name='id_usuario' value='{$row['id_usuario']}'>
                                    <td >{$row['id_usuario']}</td>
                                    <td >{$row['nome']}</td>
                                    <input type='hidden' name='nome' value='{$row['nome']}' />
                                    <td >{$row['login']}</td>
                                    <input type='hidden' name='login' value='{$row['login']}' />
                                    <td>
                                        <button id='btn-editar' type='submit' name='btn-editar' class='btn-floating btn-small'>
                                            <i class='material-icons orange'>edit</i>
                                        </button>

                                        <button id='btn-excluir' type='submit' name='btn-excluir' class='btn-floating btn-small'>
                                            <i class='material-icons red'>delete</i>
                                        </button>
                                    </td>
                                </form>
                            </tr>";          
                        }              
                    ?>
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