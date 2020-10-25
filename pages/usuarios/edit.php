<?php include_once "../includes/header.php" ?>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Cadastro de Usuários</h3>
            
            <form action="./actions.php" method="POST">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" class="char-count" data-length="255">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">mail</i>
                    <input type="email" name="login" id="login" class="validate char-count" data-length="255">
                    <label for="nome">Login</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="senha" id="senha">
                    <label for="nome">Senha</label>
                </div>

                <?php include_once '../includes/crud-buttons.php' ?>

            </form>
        </div>
    </div>

<?php include_once "../includes/footer.php" ?>