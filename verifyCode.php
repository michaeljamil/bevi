<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rethink+Sans:ital@1&display=swap" rel="stylesheet">
    
    <title>Verify Code</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1 {
            padding: 30px;
            font-size: 30px;
        }
        .password-container {
            position: relative;
            padding-bottom: 20px;
        }
        .password-container input {
            padding-right: 200px;
        }
        .toggle-password-reset{
            position: absolute;
            top: 40%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body class="login">
    <div class="login-container">
        <a href="login.php" class="back">
            <img src="images/back.png" alt="Back" style="width: 50px; height: 60px; padding-top: 20px; padding-left: 10px; position: fixed;">
        </a>
        <form action="resetPassword.php" method="post">
            <h1>Reset Password</h1>
            <div class="password-container">
                <input type="text" name="verification_code" placeholder="Enter Verification Code" required>
            </div>
            <div class="password-container">
                <input type="password" id="newPassword" name="newPassword" placeholder="New Password" required>
                <span class="toggle-password-reset" onclick="togglePasswordVisibility('newPassword')">
                    <i class="fas fa-eye"></i>
                </span>
            </div>
            <div class="password-container">
                <input type="password" id="confirmNewPassword" name="confirmNewPassword" placeholder="Confirm New Password" required>
                <span class="toggle-password-reset" onclick="togglePasswordVisibility('confirmNewPassword')">
                    <i class="fas fa-eye"></i>
                </span>
            </div>
            <button type="submit">Verify and Reset Password</button>
        </form>
    </div>
    <script>
        function togglePasswordVisibility(fieldId) {
            var passwordField = document.getElementById(fieldId);
            var toggleIcon = passwordField.nextElementSibling.querySelector('i');
            
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
