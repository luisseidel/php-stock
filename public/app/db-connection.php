<?php 
    $hostname = "localhost:3307";
    $username = "root";
    $password = "spA2w@yajEv2";
    $db       = "stock_control";

    $dbconnect = mysqli_connect($hostname,$username,$password,$db);

    if (mysqli_connect_error()) {
        die("Database connection failed: ".mysqli_connect_error());
    }
?>
