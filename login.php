<?php
include "connect.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input data
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (!empty($email) && !empty($password)) {
        // Retrieve hashed password from the database based on the provided email
        $sql = "SELECT password FROM bevi_db.customer WHERE email = '$email'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];
            
            // Verify the password
            if (password_verify($password, $hashed_password)) {
                // Password is correct, redirect to dashboard or profile page
                header("Location: index.html");
                exit; // Exit script after echoing success message
            } else {
                // Password is incorrect
                echo "Invalid email or password";
            }
        } else {
            // Email not found in the database
            echo "Invalid email or password";
        }
    } else {
        // Email or password is empty
        echo "Email and password are required";
    }
}

// Redirect to index.html if the form is not submitted
header("Location: index.html");
?>
