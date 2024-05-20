<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

include "connect.php";
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if the user exists
    $checkUserSql = "SELECT * FROM bevi_db.customer WHERE email = ?";
    $stmt = $conn->prepare($checkUserSql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User exists, generate a verification code
        $verificationCode = rand(100000, 999999);

        // Store the code in the session for verification later
        $_SESSION['verification_code'] = $verificationCode;
        $_SESSION['reset_email'] = $email;

        // Send the verification code to the user's email
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0; 
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; 
            $mail->SMTPAuth   = true;
            $mail->Username   = 'bevitime@gmail.com'; 
            $mail->Password   = 'zosv jtjm rvjp oznr'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port       = 587; 

            //Recipients
            $mail->setFrom('bevitime@gmail.com', 'Bevi');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Verification Code';
            $mail->Body    = "<!DOCTYPE html>
                                <html lang='en'>
                                <head>
                                    <meta charset='UTF-8'>
                                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                                    <title>Password Change Request</title>
                                    <link rel='stylesheet' href='css/style.css'>
                                </head>
                                <body style='font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; text-align: center;'>
                                    <div style='max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
                                        <div style='text-align: center;'>
                                            <h1 class='logo'>Bevi</h1>
                                        </div>
                                        <h1 style='color: #4b0082;'>Password Change Request</h1>
                                        <p>You have submitted a password change request.</p>
                                        <p>If it wasn't you please disregard this email and make sure you can still login to your account. If it was you, then confirm the password change by using the verification code below:</p>
                                        <h2 style='color: #4b0082;'>$verificationCode</h2>
                                        <p>Thanks!</p>
                                    </div>
                                    <div style='margin-top: 20px; text-align: center; color: #999999;'>
                                        <p>If you did not make this request, please contact us by replying to this mail.</p>
                                    </div>
                                </body>
                                </html>" . $verificationCode;

            $mail->send();
            echo "<script>
                    alert('Verification code sent to your email.');
                    window.location.href = 'verifyCode.php';
                  </script>";
        } catch (Exception $e) {
            echo "<script>
                    alert('Error sending verification code. Please try again.');
                    window.location.href = 'login.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Email not found.');
                window.location.href = 'login.php';
              </script>";
    }
}
?>
