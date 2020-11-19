<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db       = "";

    $dbconnect = mysqli_connect($hostname,$username,$password,$db);

    if (mysqli_connect_error()) {
        die("Database connection failed: ".mysqli_connect_error());
    }
?>
