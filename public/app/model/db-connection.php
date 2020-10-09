<?php 
    $hostname = "localhost:3307";
    $username = "root";
    $password = "";
    $db       = "";

    $dbconnect=mysqli_connect($hostname,$username,$password,$db);

    if ($dbconnect->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }
?>
