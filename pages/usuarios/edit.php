<?php include_once "../includes/header.php" ?>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Cadastro de Usuários</h3>
            <form action="./actions.php" method="POST">
                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="login" id="login">
                    <label for="nome">Login</label>
                </div>

                <div class="input-field col s12">
                    <input type="password" name="senha" id="senha">
                    <label for="nome">Senha</label>
                </div>

                <?php include_once '../includes/crud-buttons.php' ?>

            </form>
        </div>
    </div>

<?php include_once "../includes/footer.php" ?>