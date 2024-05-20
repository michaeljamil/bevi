<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Code</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    h1{
        padding: 30px;
        font-size: 30px;
    }
</style>
<body class = "login">
    <div class="login-container">
        <a href="login.php" class="back">
            <img src="images/back.png" alt="Back" style="width: 50px; height: 60px; padding-top: 20px; padding-left: 10px; position: fixed;">
        </a>
        <form action="resetPassword.php" method="post">
            <h1>Reset Password</h1>
            <input type="text" name="verification_code" placeholder="Enter Verification Code" required>
            <input type="password" name="newPassword" placeholder="New Password" required>
            <input type="password" name="confirmNewPassword" placeholder="Confirm New Password" required>
            <button type="submit">Verify and Reset Password</button>
        </form>
    </div>
</body>
</html>
