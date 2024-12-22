<?php
    $host = "localhost";
    $username = "root"; 
    $password = ""; 
    $database = "PeerTutorDB"; 

    $conn = mysqli_connect($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error . '<br><br>');
    }
    else {
        echo 'Connected successfully <br><br>';
    }
?>
