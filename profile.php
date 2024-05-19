<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bevi</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rethink+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">
    <!-- custom css file link  -->

    


</head>
<body>
    <a href="index.php">
        <button id="backButton" class="back-button">
            <i class="fas fa-chevron-left"></i> Back
        </button>
    </a>
    <!-- Page content -->
    <div class="container-fluid mt--2">
      <div class="row">
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My Profile</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#" class="btn">Edit Profile</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php
        
        include "connect.php";

        // Check if the user is logged in and session variables are set
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true && isset($_SESSION['username']) && isset($_SESSION['email'])) {
            // Retrieve logged-in user's information from the database
            $loggedUser = $_SESSION['username'];
            $loggedEmail = $_SESSION['email'];
            $sql = "SELECT * FROM `bevi_db`.`customer` WHERE username = '$loggedUser' AND email = '$loggedEmail'";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Extract user data
                $email = $row['email'];
                $first_name = $row['firstName'];
                $last_name = $row['lastName'];
                //$address = $row['address'];
                // Populate the form fields with the user's information
                echo "
                    <script>
                        document.getElementById('input-username').value = '$loggedUser';
                        document.getElementById('input-email').value = '$email';
                        document.getElementById('input-first-name').value = '$first_name';
                        document.getElementById('input-last-name').value = '$last_name';
                    </script>
                ";
            } else {
                echo "User not found in the database.";
            }
        } else {
            // If the user is not logged in or session variables are not set, redirect to the login page
            header("Location: login.php");
            exit;
        }
        ?>
</body>
</html>