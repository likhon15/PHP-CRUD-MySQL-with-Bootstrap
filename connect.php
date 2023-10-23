<?php
    
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $con = mysqli_connect($host, $username, $password, $dbname);
    
    // Check if the connection is successful
    if (!$con) {
        echo 'connection failed!';
    }

?>