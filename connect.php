<?php
   
    //Create connection
    $servername = "localhost";
    $username = "root";
    $password = "1234";

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //Create database "bevi_db" if there is no existing database
    $sql = "CREATE DATABASE IF NOT EXISTS bevi_db";
    //Catches error creating databse
    if (!$conn->query($sql)) {
        echo "Error creating database: " . $conn->error;
    }
    
?>