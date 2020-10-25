<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/default.css" />
    <link rel="icon" type="image/png" href="/images/webpath-logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Stock Control</title>
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <ul class="left hide-on-med-and-down">
                    <li>
                        <a class="dropdown-trigger" href="#" data-target="dropdown2">
                            Usuários
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>

                <ul id="dropdown2" class="dropdown-content">
                    <li><a href="/pages/usuarios/list.php">Cadastro Usuários</a></li>
                    <li><a href="#!">two</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">three</a></li>
                </ul>

                <a href="/pages/home.php" class="brand-logo center">
                    <img class="brand-logo center" src="/images/webpath-logo" style="max-width: 150px;">
                </a>

                <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>

                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="../session/logout.php">
                            Sair
                            <i class="material-icons right">exit_to_app</i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <a href="#!" class="brand-logo center">
                <img class="brand-logo center" src="/images/webpath-logo" style="max-width: 150px;">
            </a>

            <li>
                <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                    Usuários
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>

            <li>
                <a href="/pages/session/logout.php">
                    Sair
                    <i class="material-icons right">exit_to_app</i>
                </a>
            </li>
        </ul>

        <ul id="dropdown1" class="dropdown-content">
            <li><a href="/pages/usuarios/list.php">Cadastro Usuários</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>

    </header>

    <main>