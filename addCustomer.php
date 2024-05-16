<?php
    include "connect.php";
    
    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Insert data into the database
        $insert_sql = "INSERT INTO `bevi_db`.`customer` (name, email, username, password) 
                       VALUES ('$name', '$email', '$username', '$password')";
        
        if ($conn->query($insert_sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
?>
