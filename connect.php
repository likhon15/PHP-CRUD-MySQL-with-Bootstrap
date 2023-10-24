<?php
    
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = mysqli_connect($host, $username, $password, $dbname);
    
    // Check if the connection is successful
    if (!$conn) {
        echo 'connection failed!';
    }

?>