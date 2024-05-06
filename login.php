<?php
include "connect.php";

header("Location: index.html");

// // Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve input data
//     $email = $_POST['email'];
//     $password = $_POST['password'];
    
//     if (!empty($email) && !empty($password)) {
    
//         $sql = "SELECT * FROM bevi_db.customer WHERE email = '$email' AND password = '$password'";
//         $result = $conn->query($sql);
        
//         if ($result->num_rows > 0) {// User found, redirect to dashboard or profile page
//             header("Location: index.html");
//             exit();
//         } else {// User not found or invalid credentials
//             echo "Invalid email or password";
//         }
//     } 
// }
?>
