<?php
    include "connect.php";
    $success = false;
    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['contactNumber'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $conf_password = $_POST['conf_password'];

        // Check if passwords match
        if ($password !== $conf_password) {
            echo '<script>alert("Error: Passwords do not match")</script>';
            exit;
        } else {
            // Insert data into the database
            $insert_sql = "INSERT INTO `bevi_db`.`admin_acc` (admin_lname, admin_fname, email, phone, user, password) 
                        VALUES ('$lname','$fname','$email','$phone','$username','$password')";
            
            if ($conn->query($insert_sql) === TRUE) {
                echo "RECORDED SUCCESSFULLY";
                
                
            } else {
                echo "Error: " . $insert_sql . "<br>" . $conn->error;
            }
            //echo '<script>alert("Error: Passwords do not match")</script>';
        }
    }
?>