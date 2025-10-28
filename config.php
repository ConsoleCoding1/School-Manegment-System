<?php
    $host = "localhost";
    $username = "root";
    $password = null;
    $db_name = "school";

    $conn =  new PDO("mysql:host=$host; dbname=school", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>