<?php
    include "connect.php";
    // include "validatePass.php";

    function validate_password($password) {
        if (strlen($password) < 8)  {
            return "<script>
                        alert('Password must be at least 8 characters long.');
                        window.location.href = 'login.php';
                    </script>";
        }
        if (!preg_match('/[A-Z]/', $password)) {
            return "<script>
                        alert('Password must have atleast one UPPERCASE letter.');
                        window.location.href = 'login.php';
                    </script>";
        }
        if (!preg_match('/[\W]/', $password)) {
            return "<script>
                        alert('Password must have at least one special character.');
                        window.location.href = 'login.php';
                    </script>";
        }
        if (!preg_match('/[0-9]/', $password)) {
            return "<script>
                        alert('Password must have at least one number.');
                        window.location.href = 'login.php';
                    </script>";
        }
        return true;
    }

    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $validation_status = validate_password($password);
        if ($validation_status !== true){
            echo $validation_status;
            exit();
        }
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into the database
        $insert_sql = "INSERT INTO `bevi_db`.`customer` (firstName, lastName, email, username, password) 
                       VALUES ('$fname', '$lname', '$email', '$username', '$hashed_password')";
        
        if ($conn->query($insert_sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
?>
