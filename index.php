<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <link rel="stylesheet" href="./public/resources/_css/reset.css" />
    <link rel="stylesheet" href="./public/resources/_css/default.css" />
    <script src="./public/resources/_js/main.js"> </script>
    <?php include './public/app/model/db-connection.php' ?>
    <title>Stock-Control</title>
</head>
<body>
    <header>
        <?php include './public/pages/home/index-header.php' ?>
    </header>

    <main>
        <?php include './public/pages/home/index-body.php' ?>
    </main>

    <footer>
        <?php include './public/pages/home/index-footer.php' ?>
    </footer>
</body>
</html>