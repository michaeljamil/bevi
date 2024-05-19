<?php
include "connect.php"; // Include the existing connect.php file

function validate_password($password) {
    if (strlen($password) < 8) {
        return "<script>
                    alert('Password must be at least 8 characters long.');
                    window.location.href = 'register.php';
                </script>";
    }
    if (!preg_match('/[A-Z]/', $password)) {
        return "<script>
                    alert('Password must have at least one UPPERCASE letter.');
                    window.location.href = 'register.php';
                </script>";
    }
    if (!preg_match('/[\W]/', $password)) {
        return "<script>
                    alert('Password must have at least one special character.');
                    window.location.href = 'register.php';
                </script>";
    }
    if (!preg_match('/[0-9]/', $password)) {
        return "<script>
                    alert('Password must have at least one number.');
                    window.location.href = 'register.php';
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
    if ($validation_status !== true) {
        echo $validation_status;
        exit();
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $email_check_sql = "SELECT * FROM customer WHERE email = ?";
    $stmt = $conn->prepare($email_check_sql);
    if (!$stmt) {
        die("Error preparing statement (email check): " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>
                alert('Email already exists. Please use a different email.');
                window.location.href = 'register.php';
              </script>";
        exit();
    }

    // Insert data into the database
    $insert_sql = "INSERT INTO customer (firstName, lastName, email, username, password) 
                   VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insert_sql);
    if (!$stmt) {
        die("Error preparing statement (insert): " . $conn->error);
    }
    $stmt->bind_param("sssss", $fname, $lname, $email, $username, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>
                alert('Registration successful. Please login.');
                window.location.href = 'login.php';
              </script>";
        exit();
    } else {
        echo "Error executing statement: " . $stmt->error;
        exit();
    }
}
?>
