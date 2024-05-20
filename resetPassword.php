<?php
include "connect.php";
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredCode = $_POST['verification_code'];
    $newPassword = $_POST['newPassword'];
    $confirmNewPassword = $_POST['confirmNewPassword'];

    if ($newPassword === $confirmNewPassword) {
        if ($enteredCode == $_SESSION['verification_code']) {
            $email = $_SESSION['reset_email'];
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            // Update the password in the database
            $updateSql = "UPDATE bevi_db.customer SET password = ? WHERE email = ?";
            $stmt = $conn->prepare($updateSql);
            $stmt->bind_param("ss", $hashedPassword, $email);

            if ($stmt->execute()) {
                echo "<script>
                        alert('Password reset successfully!');
                        window.location.href = 'login.php';
                      </script>";
                // Clear session variables
                unset($_SESSION['verification_code']);
                unset($_SESSION['reset_email']);
            } else {
                echo "<script>
                        alert('Error resetting password. Please try again.');
                        window.location.href = 'login.php';
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Invalid verification code.');
                    window.location.href = 'verifyCode.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Passwords do not match.');
                window.location.href = 'verifyCode.php';
              </script>";
    }
}
?>
