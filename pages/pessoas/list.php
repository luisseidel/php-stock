<?php include_once "../includes/header.php" ?>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <table class="highlight responsive-table">
                <h3 class="light">Lista de Pessoas</h3>
                <a href="./create.php" class="btn waves-effect waves-light">
                    Adicionar 
                    <i class="material-icons right">add</i>
                </a>
                <thead>
                    <tr>
                        <th>Data 1</th>
                        <th>Data 2</th>
                        <th>Data 3</th>
                        <th>Data 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo date('d'); ?></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php include_once "../includes/footer.php" ?>