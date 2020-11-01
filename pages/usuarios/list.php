<?php include_once "../includes/header.php" ?>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <table class="striped">
                <h3 class="light">Lista de Usuários</h3>
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
                        $sql = "SELECT u.* FROM usuarios u";
                        $query = mysqli_query($dbconnect, $sql) or die (mysqli_error($dbconnect));
                        while ($row = mysqli_fetch_array($query)) {
                            echo
                            "<tr>
                                <form action='actions.php' method='post'>
                                    <td name='id_usuario'>{$row['id_usuario']}</td>
                                    <td name='nome'>{$row['nome']}</td>
                                    <td name='login'>{$row['login']}</td>
                                    <td>
                                        <button type='submit' value='Editar' name='btn-editar' class='btn-floating'>
                                            <i class='material-icons orange'>edit</i>
                                        </button>

                                        <button type='submit' value='Remover' name='btn-excluir' class='btn-floating'>
                                            <i class='material-icons red'>delete</i>
                                        </button>
                                    </td>
                                </form>
                            </tr>";          
                        }              
                    ?>
                </tbody>
            </table>

            <a href="./edit.php" class="btn">Adicionar</a>

        </div>
    </div>

<?php include_once "../includes/footer.php" ?>