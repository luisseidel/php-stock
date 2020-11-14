<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste flexbox</title>
    <link rel="stylesheet" href="/css/reset.css">
    <style>
        .icon {
            max-width: 30px;
            max-height: 30px;
        }

        .flex-row { display: flex; flex-direction: row; }
        .flex-column { display: flex; flex-direction: column; }
        .flex-row-reverse { display: flex; flex-direction: row-reverse; }
        .flex-column-reverse { display: flex; flex-direction: column-reverse; }
    </style>
</head>
<body>
    
    <section class="container">

        <article class="card">
            <div class="card-image">
                <img src="/images/webpath-logo.png" alt="Logo">
            </div>
            <div class="card-contend">
                <h2>Titulo</h2>
                <p>Esse é um resumo do que tem no card. Ele deve ser curto e ocupar no máximo 2 linhas</p>
                <div class="card-links">
                    <img class="icon" src="/images/interface/svg/share-light.svg" alt="">                    
                    <img class="icon" src="/images/social-rounded/png/facebook.png" alt="">
                </div>
            </div>
        </article>

    </section>

</body>
</html>