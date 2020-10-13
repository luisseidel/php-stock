<?php
    //Encerrando a sessão
    session_start();
    session_unset();
    session_destroy();

    $dir    = '/';
    $files1 = scandir($dir);
    print_r($files1);
?>