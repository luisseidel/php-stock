<?php  

    $hostname = "localhost:3307";
    $username = "root";
    $password = "spA2w@yajEv2";
    $db       = "stock_control";

    $dbconnect = mysqli_connect($hostname,$username,$password,$db);

    if ($dbconnect -> connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }

    $query = "SELECT * FROM arquivos";
    $result = mysqli_query($dbconnect, $query);

    while($row = mysqli_fetch_array($result)) {
        echo '
            <div class="imagem">
                <img src="data:image/jpeg;base64,'.base64_encode($row['imagem']).'" />
            </div>
        ';
    }
    
?>