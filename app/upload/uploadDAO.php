<?php

    $hostname = "localhost:3307";
    $username = "root";
    $password = "spA2w@yajEv2";
    $db       = "stock_control";

    $dbconnect = mysqli_connect($hostname,$username,$password,$db);

    if ($dbconnect -> connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }

    if (isset($_POST["enviar"])) {
        $file = addslashes(file_get_contents($_FILES['arquivo']['tmp_name']));
        $queryId = mysqli_query($dbconnect, "SELECT (MAX(id)+1) as id FROM arquivos");

        while($row = mysqli_fetch_array($queryId)) {
            $maxId = $row['id'];
        }

        $query = "INSERT INTO arquivos VALUES ( '$maxId', '$file', '')";

        if (mysqli_query($dbconnect, $query)) {
            echo '<script>alert("Image Inserted")</script>';
        } else {
            echo '<script>alert("Not inserted")</script>';
        }
    } else {
        echo '<script>alert("NOT PRESSED ENVIAR")</script>';
    }

    $dbconnect->close();

?>