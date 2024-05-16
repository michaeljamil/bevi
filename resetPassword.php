<?php
include "connect.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle password reset
    $email = $_POST['email'];
    $username = $_POST['username'];
    $newPassword = $_POST['newPassword'];
    $confirmNewPassword = $_POST['confirmNewPassword'];

    if ($newPassword === $confirmNewPassword) {
        // Check if the user exists
        $checkUserSql = "SELECT * FROM bevi_db.customer WHERE email = '$email' AND username = '$username'";
        $checkUserResult = $conn->query($checkUserSql);

        if ($checkUserResult && $checkUserResult->num_rows > 0) {
            // User exists, update the password
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $updateSql = "UPDATE bevi_db.customer SET password = '$hashedPassword' WHERE email = '$email' AND username = '$username'";
            
            if ($conn->query($updateSql) === TRUE) {
                echo "<script>
                        alert('Password reset successfully!');
                        window.location.href = 'login.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Error resetting password. Please try again.');
                        window.location.href = 'login.php';
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Invalid email or username.');
                    window.location.href = 'login.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Passwords do not match.');
                window.location.href = 'login.php';
              </script>";
    }
}
?>
