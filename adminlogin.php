<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bevi Admin Login  </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rethink+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login">
    <?php
        session_start();
        include "connect.php";

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve input data
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if (!empty($email) && !empty($password)) {
                // Retrieve hashed password from the database based on the provided email
                $sql = "SELECT password FROM bevi_db.admin_acc WHERE email = '$email'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $hashed_password = $row['password'];
                    
                    // Verify the password
                    if (password_verify($password, $hashed_password)) {
                        $_SESSION['loggedIn'] = true; // Set a session variable to indicate user is logged in
                        echo "<script>
                                alert('Login successful!');
                                window.location.href = 'admin.php';
                            </script>";
                        
                        exit;
                    } else {
                        // Password is incorrect
                        echo "<script>alert('Invalid email or password');</script>";
                    }
                } else {
                    // Email not found in the database
                    echo "<script>alert('Invalid email or password');</script>";
                }
            } else {
                // Email or password is empty
                echo "<script>alert('Email and Password Required!');</script>";
            }
        }

        // Redirect to index.html if the form is not submitted
        //header("Location: index.html");
        ?>
    <div class="login-container" id="login-container">
        <div class="form-container sign-in">
            <form action="adminlogin.php" method="post">
                <h1>Admin Sign In</h1>
                <p></p>
                <span>Use your Email and Password</span>
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <a href="#" onclick="openForgotPasswordModal()">Forget Your Password?</a>                <button>Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use the administration side of the system</p>
                </div>
            </div>
        </div>
    </div>


  <!-- The Modal -->
  <div id="forgetpasswordModal" class="forgot-modal">
    <span onclick="closeForgotPasswordModal()" class="close" title="Close Modal">&times;</span>
    <!-- Modal Content -->
    <form class="forgot-modal-content animate" action="resetPassword.php" method="post">
        <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Your Email" name="email" required>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Your Username" name="username" required>
            <label for="newPassword"><b>New Password</b></label>
            <div class="password-wrapper">
                <input type="password" placeholder="Enter Your New Password" name="newPassword" id="newPassword" required>
                <span class="toggle-password" onclick="togglePasswordVisibility('newPassword')">
                    <i class="fas fa-eye"></i>
                </span>
            </div>
            <label for="confirmNewPassword"><b>Confirm Password</b></label>
            <div class="password-wrapper">
                <input type="password" placeholder="Confirm New Password" name="confirmNewPassword" id="confirmNewPassword" required>
                <span class="toggle-password" onclick="togglePasswordVisibility('confirmNewPassword')">
                    <i class="fas fa-eye"></i>
                </span>
            </div>
            <button type="submit" class="btn">Reset</button>
            <button type="button" onclick="closeForgotPasswordModal()" class="btn">Cancel</button>
        </div>
    </form>
</div>
    <script src="js/script.js"></script>
</body>
</html>