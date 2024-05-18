<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bevi Login  </title>
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
                $sql = "SELECT password FROM bevi_db.customer WHERE email = '$email'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $hashed_password = $row['password'];
                    
                    // Verify the password
                    if (password_verify($password, $hashed_password)) {
                        $_SESSION['loggedIn'] = true; // Set a session variable to indicate user is logged in
                        echo "<script>
                                alert('Login successful!');
                                window.location.href = 'index.php';
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
        <div class="form-container sign-up">
            <form action="addCustomer.php" method="post">
                <h1>Create Account</h1>
                <span>or use your email for registeration</span>
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="username" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
        <a href="index.php" class="back">
            <img src="images/back.png" alt="Back" style="width: 50px; height: 60px; padding-top: 20px; padding-left: 10px; position: fixed;">
        </a>

            <form action="" method="post">
                <h1>Sign In</h1>
                <span>or use your email password</span>
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <a href="#" onclick="openForgotPasswordModal()">Forget Your Password?</a>  
                <button type="submit" name="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
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