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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rethink+Sans:ital@1&display=swap" rel="stylesheet">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
        .menu-container {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 2000; /* Sit on top */
            left: 0;
            top: 0;
            width: 70%; /* Full width */
            height: 80%; /* Full height */
            padding-top: 60px;
        }
        /* Coffee Product Detail */
        .product-detail-coffee {
            background: linear-gradient(to bottom right, #FFBE98, #FEECE2, #F7DED0);
            border-radius: 10px;
            box-shadow: 10px 0 10px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            width: 70%; /* Adjust width */
            height: 80vh; /* Adjust height */
            margin: auto; /* Center horizontally */
            position: fixed; /* Fixed position */
            overflow: auto; /* Enable scroll if needed */

            left: 0;
            right: 0;
            top: 55%; /* Center vertically */
            transform: translateY(-50%); /* Adjust for vertical centering */
            z-index: 1; /* Layered above other content */
            padding: 20px; /* Add padding */
            text-align: center;
        }
        /* Iced Coffee Product Detail */
        .product-detail-iced-coffee {
            background: linear-gradient(to bottom right, #eed8c2, #e5ceb7, #e1c4a5);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            width: 70%; /* Adjust width */
            height: 80vh; /* Adjust height */
            margin: auto; /* Center horizontally */
            position: fixed; /* Fixed position */
            overflow: auto; /* Enable scroll if needed */

            left: 0;
            right: 0;
            top: 55%; /* Center vertically */
            transform: translateY(-50%); /* Adjust for vertical centering */
            z-index: 1; /* Layered above other content */
            padding: 20px; /* Add padding */
            text-align: center;
        }

        /*  Milktea Product Detail */
        .product-detail-milktea {
            background: linear-gradient(to bottom right, #8ba888, #c0cfb2, #fff);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            width: 70%; /* Adjust width */
            height: 80vh; /* Adjust height */
            margin: auto; /* Center horizontally */
            position: fixed; /* Fixed position */
            overflow: auto; /* Enable scroll if needed */

            left: 0;
            right: 0;
            top: 55%; /* Center vertically */
            transform: translateY(-50%); /* Adjust for vertical centering */
            z-index: 1; /* Layered above other content */
            padding: 20px; /* Add padding */
            text-align: center;
        }

        /*  Iced Tea Product Detail */
        .product-detail-iced-tea {
            background: linear-gradient(to bottom right, #ffc284,#ffd28e, #ffe096);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            width: 70%; /* Adjust width */
            height: 80vh; /* Adjust height */
            margin: auto; /* Center horizontally */
            position: fixed; /* Fixed position */
            overflow: auto; /* Enable scroll if needed */

            left: 0;
            right: 0;
            top: 55%; /* Center vertically */
            transform: translateY(-50%); /* Adjust for vertical centering */
            z-index: 1; /* Layered above other content */
            padding: 20px; /* Add padding */
            text-align: center;
        }

        /*  Frappe Product Detail */
        .product-detail-frappe {
            background: linear-gradient(to bottom right, 	#f9e2e5, 	#fee7f1, #f4d3d8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            width: 70%; /* Adjust width */
            height: 80vh; /* Adjust height */
            margin: auto; /* Center horizontally */
            position: fixed; /* Fixed position */
            overflow: auto; /* Enable scroll if needed */

            left: 0;
            right: 0;
            top: 55%; /* Center vertically */
            transform: translateY(-50%); /* Adjust for vertical centering */
            z-index: 1; /* Layered above other content */
            padding: 20px; /* Add padding */
            text-align: center;
        }

        /*  Soda Product Detail */
        .product-detail-soda {
            background: linear-gradient(to bottom right, #008DDA, #41C9E2, #ACE2E1);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            width: 70%; /* Adjust width */
            height: 80vh; /* Adjust height */
            margin: auto; /* Center horizontally */
            position: fixed; /* Fixed position */
            overflow: auto; /* Enable scroll if needed */

            left: 0;
            right: 0;
            top: 55%; /* Center vertically */
            transform: translateY(-50%); /* Adjust for vertical centering */
            z-index: 1; /* Layered above other content */
            padding: 20px; /* Add padding */
            text-align: center;
        }


        .product-image {
            max-width: 200px;
        }

        .product-name {
            font-size: 40px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #222831;
        }

        .product-description {
            font-size: 16px;
            margin-bottom: 20px;
            text-align: center;
            color: #31363F;
        }

        .quantity-control, .size-select, .customization-section {
            margin-bottom: 20px;
            font-size: 1.5rem;
            text-align: center;
        }

        .quantity-control button {
            padding: 5px 10px;
            border: none;
            background-color: #31363F;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            margin: 0 5px;
            font-size: 16px;
        }

        .quantity-control button:hover {
            background-color: #EEEEEE;
        }

        .size-select select, .customization-section select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #222831;
            font-size: 16px;
            color: #31363F;
            background-color: #fff;
        }

        .customization-section {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        .customization-section h3 {
            font-size: 25px;
            margin-bottom: 15px;
            color: #222831;
        }

        .customization-options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .customization-option {
            text-align: left;
            font-size: 1.5rem;
        }

        .customization-option label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            color: #222831;
        }

        .submit-button {
            padding: 10px;
            background-color: #31363F;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
            font-size: 18px;
            border-radius: 5px;
            display: inline-block;
            margin-right: 20px;
            width: 20%;
            max-width: 300px;
            text-decoration: none;
        }

        .submit-button:hover {
            background-color: #B4B4B8;
        }

        .submit-button{
            text-decoration: none;
        }

        .cancel-button {
            padding: 10px;
            background-color: #F1EFEF;
            color: #31363F;
            border: 1px solid black;
            cursor: pointer;
            text-align: center;
            font-size: 18px;
            border-radius: 5px;
            display: inline-block;
            width: 20%;
            margin-right: 20px;
            max-width: 300px;
            text-decoration: none;
        }

        .cancel-button:hover {
            background-color: #D8D8D8;
        }

        .cancel-button{
            text-decoration: none;
        }

        /* Styles for hover image */
        .hover-image-container {
            position: relative;
            width: 200px;
            height: 200px;
            display: none;
            margin-top: 20px;
        }

        .hover-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .dropdown-container {
            position: relative;
        }

        .dropdown-container:hover .hover-image-container {
            display: block;
        }

        .action {
            position: fixed;
            top: 20px;
            right: 30px;
            }

            .action .profile {
            position: relative;
            background-color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
            }

            .action .profile img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            }

            .action .profile-menu {
            position: absolute;
            top: 120px;
            right: -10px;
            padding: 10px 20px;
            background: #fff;
            width: 200px;
            box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            transition: 0.5s;
            visibility: hidden;
            opacity: 0;
            }

            .action .profile-menu.active {
            top: 80px;
            visibility: visible;
            opacity: 1;
            }

            .action .profile-menu::before {
            content: "";
            position: absolute;
            top: -5px;
            right: 28px;
            width: 20px;
            height: 20px;
            background: #fff;
            transform: rotate(45deg);
            }

            .action .profile-menu h3 {
            width: 100%;
            text-align: center;
            font-size: 18px;
            padding: 20px 0;
            font-weight: 500;
            color: #555;
            line-height: 1.5em;
            }

            .action .profile-menu h3 span {
            font-size: 14px;
            color: #cecece;
            font-weight: 300;
            }

            .action .profile-menu ul li {
            list-style: none;
            padding: 16px 0;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            }

            .action .profile-menu ul li img {
            max-width: 20px;
            margin-right: 10px;
            opacity: 0.5;
            transition: 0.5s;
            }

            .action .profile-menu ul li:hover img {
            opacity: 1;
            }

            .action .profile-menu ul li a {
            display: inline-block;
            text-decoration: none;
            color: #555;
            font-weight: 500;
            transition: 0.5s;
            }

            .action .profile-menu ul li:hover a {
            color: #ff5d94;
            }


    </style>
<body>
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <h1 class="logo">Bevi </h1>

    <?php
        // Check if user is logged in
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
            // If logged in, display logout button
            echo ' <nav class="navbar">
            <a href="#home">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#menu">DRINKS</a>
            <a href="cart.html">CART</a>
            <a href="#review">REVIEW</a>
            
        </nav>';
        } else {
            // If not logged in, display login button
            echo '<nav class="navbar">
            <a href="#home">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#menu">DRINKS</a>
            <a href="#review">REVIEW</a>
            
        </nav>';
        }
    ?>



    <?php
        // Check if user is logged in
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
            // If logged in, display logout button
            echo ' <a href="javascript:menuToggle()">
            <div class="action">
            <div class="profile">
              <img src="images/user.png" />
            </div>
            <div class="profile-menu">
              <h3>Name ng user itu</h3>
              <ul>
                <li>
                  <a href="profile.php">My profile</a>
                </li>
                <li>
                <a href="logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
             </a>';
        } else {
            // If not logged in, display login button
            echo '<a href="login.php" class="btn" id="loginBtn">Log in</a>';
        }
    ?>
    
    

</header>

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Pour your heart into it</h3>
            <a href="#menu" class="home-btn">Order Now and Take a Sip!!</a>
        </div>

        <div class="image">
            <img src="images/" class="main-home-image" alt="">
        </div>

    </div>

    <div class="image-slider">
        <img src="images/Coffee-removebg-preview.png" alt="">
        <img src="images/Frappe-removebg-preview.png" alt="">
        <img src="images/IcedCoffee-removebg-preview.png" alt="">
        <img src="images/IcedTea-removebg-preview.png" alt="">
        <img src="images/Milktea-removebg-preview.png" alt="">
        <img src="images/Soda-removebg-preview.png" alt="">
    </div>

</section>
<section class="featured" id="featured">
    <h1 class="heading"> POPULAR <span> PRE-MADE THEMES</span> </h1>    

    <div class="product"> 
        <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="images/bini.png" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bini Theme Cup</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/blackpink.png" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Black Pink Theme Cup</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/bts.png" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h2 class="product-brand">BTS Theme Cup</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/newjeans.png" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h2 class="product-brand">New Jeans Theme Cup</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/taylor.png" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Taylor Swift Theme Cup</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="images/twice.png" class="product-thumb" alt="">
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Twice Theme Cup</h2>
                </div>
            </div>
            
        </div>
    </div>
   
</section>


<section class="about" id="about">

    <h1 class="heading"> ABOUT US <span>GET TO KNOW US</span> </h1>    

    <div class="row">

        <div class="image">
            <img src="images/proponents.jpg" alt="">
        </div>

        <div class="content">
            <h3 class="title">what's make our store special!</h3>
            <p>Welcome to Bevi, where we've made it our mission to ensure that your
                 beverage cravings are met with ease, affordability, and personalized satisfaction. 
                 Our 24/7 e-commerce platform offers a diverse selection of drinks, from comforting 
                 coffee to indulgent frappes, tailored precisely to your preferences. With Bevi, 
                 convenience and customization go hand in hand, ensuring that every sip is a moment 
                 of pure refreshment, anytime, anywhere. Its Bevi Time!</p>
            <div class="icons-container">
                <div class="icons">
                    <img src="images/sparkling-water.png" alt="">
                    <h3>quality drinks</h3>
                </div>
                <div class="icons">
                    <img src="images/membership.png" alt="">
                    <h3> discounts</h3>
                </div>
                <div class="icons">
                    <img src="images/customize.png" alt="">
                    <h3>Customization</h3>
                </div>
            </div>
        </div>

    </div>

</section>


<section class="menu" id="menu">

    <h1 class="heading"> OUR MENU <span>CHOOSE YOUR DRINK</span> </h1>

    <div class="box-container">

        <a href="javascript:openCoffeeModal()" class="box">
            <img src="images/coffee.png" alt="">
            <div class="content">
                <h3>Hot Coffee</h3>
                <h3>Php 70</h3>
                <p>Indulge in the rich aroma and comforting warmth of freshly brewed beans with our Hot Coffee. Perfect for early mornings or late nights, this classic beverage offers a revitalizing boost of energy with every sip.</p>
            </div>
        </a>

        <a href="javascript:openIcedCoffeeModal()" class="box">
            <img src="images/iced coffee.png" alt="">
            <div class="content">
                <h3>Iced Coffee</h3>
                <h3>Php 70</h3>
                <p>Cool down and refresh with our Iced Coffee, a chilled delight that invigorates with every sip. Balanced flavors, combined with a refreshing chill, make it the perfect companion for any time of day.</p>
            </div>
        </a>

        <a href="javascript:openMilkteaModal()" class="box">
            <img src="images/milktea.png" alt="">
            <div class="content">
                <h3>Milktea</h3>
                <h3>Php 70</h3>
                <p>Experience creamy perfection with our Milktea, crafted to satisfy even the most discerning tea enthusiasts. Choose from a variety of flavors and enjoy the perfect blend of sweetness and creaminess in every sip.</p>
            </div>
        </a>

        <a href="javascript:openIcedTeaModal()" class="box">
            <img src="images/iced tea.png" alt="">
            <div class="content">
                <h3>Iced Tea</h3>
                <h3>Php 70</h3>
                <p>Enjoy a classic refreshment with our Iced Tea, a timeless favorite that offers a cool and revitalizing escape. With a variety of flavors to choose from, every sip is a journey into refreshing bliss.</p>
            </div>
        </a>

        <a href="javascript:openFrappeModal()" class="box">
            <img src="images/frappe.png" alt="">
            <div class="content">
                <h3>Frappe</h3>
                <h3>Php 70</h3>
                <p>Indulge your senses with our Frappes, a symphony of blended goodness that combines creamy textures with decadent toppings. Each sip offers a delightful escape into a world of indulgence and satisfaction.</p>
            </div>
        </a>

        <a href="javascript:openSodaModal()" class="box">
            <img src="images/soda.png" alt="">
            <div class="content">
                <h3> Soda</h3>
                <h3>Php 70</h3>
                <p>Quench your thirst with our selection of Sodas, offering a fizzy burst of flavor that delights the senses and refreshes the palate. Choose from a variety of flavors and enjoy a bubbly treat anytime, anywhere.</p>
            </div>
        </a>

    </div>

</section>

<section class="review" id="review">
    <h1 class="heading"> REVIEWS <span>THEIR THOUGHTS</span> </h1>
    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <?php
            // include the connect.php that contain the connection
            include 'connect.php';

            // Query to select feedback data
            $sql = "SELECT * FROM bevi_db.feedback";
            $result = mysqli_query($conn, $sql);

            // Check if there are any feedbacks
            if (mysqli_num_rows($result) > 0) {
                // Loop through each feedback
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="swiper-slide box">
                        <i class="fas fa-quote-left"></i>
                        <i class="fas fa-quote-right"></i>
                        <div class="stars">
                            <?php
                            for ($i = 0; $i < $row["rating"]; $i++) {
                                echo '<i class="fas fa-star"></i>';
                            }
                            ?>
                        </div>
                        <p><?php echo $row["feedback_details"]; ?></p>
                        <h3><?php echo $row["name"]; ?></h3>
                        <span><?php echo $row["date"]; ?></span>
                    </div>
                    <?php
                }
            } else {
                echo '<p>No feedbacks found.</p>';
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <?php
        // Check if user is logged in
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
            // If logged in, display logout button
            echo ' <button onclick="openFeedbackModal()" class="review-btn">Give Feedback</a>';
        } else {
            // If not logged in, display login button
            echo '';
        }
    ?>

</section>


<!-- The Modal -->
<div id="feedbackModal" class="modal">
    <span onclick="closeFeedbackModal()" class="close" title="Close Modal">&times;</span>
  
    <!-- Modal Content -->
    <form class="modal-content animate" action="feedback.php" method="post">
      
      <div class="container">
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Your Name" name="name" required>
  
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Your Email" name="email" required>
  
        <label for="date"><b>Date</b></label>
        <input type="date" name="date" required>

        <label for="rating"><b>Rating</b></label>
        <input type="number" placeholder="Enter Rating (1 to 5)" name="rating" min="1" max="5" required>

        <label for="product"><b>Product</b></label>
        <input type="text" placeholder="Enter Product Name" name="product" required>
  
        <label for="feedback"><b>Your Feedback</b></label>
        <textarea placeholder="Enter Your Feedback" name="feedback" required></textarea>
  
        <button type="submit" class="btn" name="submit">Submit</button>
        <button type="button" onclick="closeFeedbackModal()" class="btn">Cancel</button>
      </div>
    </form>
</div>


<!---- Coffee Modal ----->

<div id="coffeeModal" class="menu-container">
<span onclick="closeCoffeeModal()" class="close" title="Close Modal">&times;</span>
    <div class="product-detail-coffee">
        <img src="images/Coffee-removebg-preview.png" alt="Product Image" class="product-image">
        <h1 class="product-name">Coffee</h1>
        <p class="product-description">Enjoy your favorite coffee in this beautifully designed cup with a unique coffee theme.</p>
        
        <div class="quantity-control">
            <button class="decreaseQuantity">-</button>
            <span class="quantity">1</span>
            <button class="increaseQuantity">+</button>
        </div>

        <div class="size-select">
            <label for="size">Size:</label>
            <select id="size">
                <option value="Medio">Medio</option>
                <option value="Grande">Grande</option>
                <option value="Venti">Venti</option>
            </select>
        </div>

        <div class="customization-section">
            <h3>Customization</h3>
            <div class="customization-options">
                <div class="customization-option">
                    <label for="Add-Ons">Add Ons (+Php10):</label>
                    <select id="Add-Ons">
                        <option value="">None</option>
                        <option value="Pearl">Pearl</option>
                        <option value="Crystal">Crystal</option>
                        <option value="Cream Cheese">Cream Cheese</option>
                        <option value="Coffee Jelly">Coffee Jelly</option>
                        <option value="Crushed Oreo">Crushed Oreo</option>
                        <option value="Cream Puff">Cream Puff</option>
                        <option value="Cheesecake">Cheesecake</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="cupColor">Cup Color:</label>
                    <select id="cupColor">
                        <option value="white">White</option>
                        <option value="black">Black</option>
                        <option value="brown">Brown</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="stickers">Stickers:</label>
                    <select id="stickers">
                        <option value="none">None</option>
                        <option value="Boba/bubble">Boba/bubble tea illustrations</option>
                        <option value="Cute animals">Cute animals (cats, pandas, etc.)</option>
                        <option value="Food emojis">Food emojis (smiley faces, hearts, stars)</option>
                        <option value="Inspirational">Inspirational quotes</option>
                        <option value="Personalized">Personalized stickers (name, initials)</option>
                    </select>
                </div>
                <div class="customization-option dropdown-container">
                    <label for="preMadeThemes">Pre-made Themes:</label>
                    <select id="preMadeThemes">
                        <option value="">None</option>
                        <option value="Bini">Bini Theme</option>
                        <option value="BlackPink">BlackPink Theme</option>
                        <option value="BTS">BTS Theme</option>
                        <option value="New Jeans">New Jeans Theme</option>
                        <option value="Taylor">Taylor Swift Theme</option>
                        <option value="Twice">Twice Theme</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="accessories">Accessories:</label>
                    <select id="accessories">
                        <option value="none">None</option>
                        <option value="sleeves">Cup sleeves (protective, customizable)</option>
                        <option value="stirrers">Stirrers/spoons (plastic, wooden, metal)</option>
                        <option value="bag">Carrying bag/pouch (reusable, eco-friendly)</option>
                        <option value="holder">Cup holder (for larger cups)</option>
                        <option value="charms">Customized charms/keychains attached to the cup</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="lidType">Lid Type:</label>
                    <select id="lidType">
                        <option value="none">None</option>
                        <option value="Dome">Dome Lid</option>
                        <option value="Flat">Flat Lid</option>
                        <option value="Sip Through">Sip Through Lid</option>
                        <option value="Straw hole lid">Straw hole lid</option>
                        <option value="Custom-designed">Custom-designed lid (with logo or pattern)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Straw Options:</label>
                    <select id="strawOptions">
                        <option value="none">None</option>
                        <option value="Standard">Standard plastic straw</option>
                        <option value="Biodegradable">Biodegradable paper straw</option>
                        <option value="Stainless">Stainless steel reusable straw</option>
                        <option value="Bubble">Bubble tea straw (larger diameter for boba)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Flavor:</label>
                    <select id="strawOptions">
                        <option value="none">None</option> 
                        <option value="Standard">Americano</option>
                        <option value="Standard">Caramel Machiatto</option>
                        <option value="Standard">French Vanilla</option>
                        <option value="Standard">Hazelnut</option>
                        <option value="Standard">Pumpkin Spice Latte</option>
                        
                    </select>
                </div>
            </div>
        </div>

        <a href="cart.html" class="submit-button">Add to Cart</a>
        <button type="button" onclick="closeCoffeeModal()" class="cancel-button">Cancel</button>
    </div>
</div>



<!---- Iced Coffee Modal ----->
<div id="icedCoffeeModal" class="menu-container">
<span onclick="closeIcedCoffeeModal()" class="close" title="Close Modal">&times;</span>
    <div class="product-detail-iced-coffee">
        <img src="images/IcedCoffee-removebg-preview.png" alt="Product Image" class="product-image">
        <h1 class="product-name">Iced Coffee</h1>
        <p class="product-description">Enjoy your favorite Iced Coffee in this beautifully designed cup with a unique theme.</p>
        
        <div class="quantity-control">
            <button class="decreaseQuantity">-</button>
            <span class="quantity">1</span>
            <button class="increaseQuantity">+</button>
        </div>

        <div class="size-select">
            <label for="size">Size:</label>
            <select id="size">
                <option value="Medio">Medio</option>
                <option value="Grande">Grande</option>
                <option value="Venti">Venti</option>
            </select>
        </div>

        <div class="customization-section">
            <h3>Customization</h3>
            <div class="customization-options">
                <div class="customization-option">
                    <label for="Add-Ons">Add Ons (+Php10):</label>
                    <select id="Add-Ons">
                        <option value="">None</option>
                        <option value="Pearl">Pearl</option>
                        <option value="Crystal">Crystal</option>
                        <option value="Cream Cheese">Cream Cheese</option>
                        <option value="Coffee Jelly">Coffee Jelly</option>
                        <option value="Crushed Oreo">Crushed Oreo</option>
                        <option value="Cream Puff">Cream Puff</option>
                        <option value="Cheesecake">Cheesecake</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="cupColor">Cup Color:</label>
                    <select id="cupColor">
                        <option value="white">White</option>
                        <option value="black">Black</option>
                        <option value="brown">Brown</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="stickers">Stickers:</label>
                    <select id="stickers">
                        <option value="none">None</option>
                        <option value="Boba/bubble">Boba/bubble tea illustrations</option>
                        <option value="Cute animals">Cute animals (cats, pandas, etc.)</option>
                        <option value="Food emojis">Food emojis (smiley faces, hearts, stars)</option>
                        <option value="Inspirational">Inspirational quotes</option>
                        <option value="Personalized">Personalized stickers (name, initials)</option>
                    </select>
                </div>
                <div class="customization-option dropdown-container">
                    <label for="preMadeThemes">Pre-made Themes:</label>
                    <select id="preMadeThemes">
                        <option value="">None</option>
                        <option value="Bini">Bini Theme</option>
                        <option value="BlackPink">BlackPink Theme</option>
                        <option value="BTS">BTS Theme</option>
                        <option value="New Jeans">New Jeans Theme</option>
                        <option value="Taylor">Taylor Swift Theme</option>
                        <option value="Twice">Twice Theme</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="accessories">Accessories:</label>
                    <select id="accessories">
                        <option value="none">None</option>
                        <option value="spoon">Cup sleeves (protective, customizable)</option>
                        <option value="lid">Stirrers/spoons (plastic, wooden, metal)</option>
                        <option value="straw">Carrying bag/pouch (reusable, eco-friendly)</option>
                        <option value="straw">Cup holder (for larger cups)</option>
                        <option value="straw">Customized charms/keychains attached to the cup</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="lidType">Lid Type:</label>
                    <select id="lidType">
                        <option value="none">None</option>
                        <option value="Dome">Dome Lid</option>
                        <option value="Flat">Flat Lid</option>
                        <option value="Sip Through">Sip Through Lid</option>
                        <option value="Straw hole lid">Straw hole lid</option>
                        <option value="Custom-designed">Custom-designed lid (with logo or pattern)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Straw Options:</label>
                    <select id="strawOptions">
                        <option value="none">None</option>
                        <option value="Standard">Standard plastic straw</option>
                        <option value="Biodegradable">Biodegradable paper straw</option>
                        <option value="Stainless">Stainless steel reusable straw</option>
                        <option value="Bubble">Bubble tea straw (larger diameter for boba)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Flavor:</label>
                    <select id="strawOptions">
                        <option value="none">None</option> 
                        <option value="Standard">Choco Kisses</option>
                        <option value="Standard">Kape Caramel</option>
                        <option value="Standard">Mocha</option>
                        <option value="Standard">Black Forest</option>
                        <option value="Standard">Choco Fudge</option>
                    </select>
                </div>
            </div>
        </div>

        <a href="cart.html" class="submit-button">Add to Cart</a>
        <button type="button" onclick="closeIcedCoffeeModal()" class="cancel-button">Cancel</button>
    </div>
</div>

<!-- Milktea Modal -->

<div id="milkteaModal" class="menu-container">
<span onclick="closeMilkteaModal()" class="close" title="Close Modal">&times;</span>
    <div class="product-detail-milktea">
        <img src="images/Milktea-removebg-preview.png" alt="Product Image" class="product-image">
        <h1 class="product-name">Milktea</h1>
        <p class="product-description">Enjoy your favorite Milktea in this beautifully designed cup with a unique and pre-made theme.</p>
        
        <div class="quantity-control">
            <button class="decreaseQuantity">-</button>
            <span class="quantity">1</span>
            <button class="increaseQuantity">+</button>
        </div>

        <div class="size-select">
            <label for="size">Size:</label>
            <select id="size">
                <option value="Medio">Medio</option>
                <option value="Grande">Grande</option>
                <option value="Venti">Venti</option>
            </select>
        </div>

        <div class="customization-section">
            <h3>Customization</h3>
            <div class="customization-options">
                <div class="customization-option">
                    <label for="Add-Ons">Add Ons (+Php10):</label>
                    <select id="Add-Ons">
                        <option value="">None</option>
                        <option value="Pearl">Pearl</option>
                        <option value="Crystal">Crystal</option>
                        <option value="Cream Cheese">Cream Cheese</option>
                        <option value="Coffee Jelly">Coffee Jelly</option>
                        <option value="Crushed Oreo">Crushed Oreo</option>
                        <option value="Cream Puff">Cream Puff</option>
                        <option value="Cheesecake">Cheesecake</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="cupColor">Cup Color:</label>
                    <select id="cupColor">
                        <option value="white">White</option>
                        <option value="black">Black</option>
                        <option value="brown">Brown</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="stickers">Stickers:</label>
                    <select id="stickers">
                        <option value="none">None</option>
                        <option value="Boba/bubble">Boba/bubble tea illustrations</option>
                        <option value="Cute animals">Cute animals (cats, pandas, etc.)</option>
                        <option value="Food emojis">Food emojis (smiley faces, hearts, stars)</option>
                        <option value="Inspirational">Inspirational quotes</option>
                        <option value="Personalized">Personalized stickers (name, initials)</option>
                    </select>
                </div>
                <div class="customization-option dropdown-container">
                    <label for="preMadeThemes">Pre-made Themes:</label>
                    <select id="preMadeThemes">
                        <option value="">None</option>
                        <option value="Bini">Bini Theme</option>
                        <option value="BlackPink">BlackPink Theme</option>
                        <option value="BTS">BTS Theme</option>
                        <option value="New Jeans">New Jeans Theme</option>
                        <option value="Taylor">Taylor Swift Theme</option>
                        <option value="Twice">Twice Theme</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="accessories">Accessories:</label>
                    <select id="accessories">
                        <option value="none">None</option>
                        <option value="spoon">Cup sleeves (protective, customizable)</option>
                        <option value="lid">Stirrers/spoons (plastic, wooden, metal)</option>
                        <option value="straw">Carrying bag/pouch (reusable, eco-friendly)</option>
                        <option value="straw">Cup holder (for larger cups)</option>
                        <option value="straw">Customized charms/keychains attached to the cup</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="lidType">Lid Type:</label>
                    <select id="lidType">
                        <option value="none">None</option>
                        <option value="Dome">Dome Lid</option>
                        <option value="Flat">Flat Lid</option>
                        <option value="Sip Through">Sip Through Lid</option>
                        <option value="Straw hole lid">Straw hole lid</option>
                        <option value="Custom-designed">Custom-designed lid (with logo or pattern)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Straw Options:</label>
                    <select id="strawOptions">
                        <option value="none">None</option>
                        <option value="Standard">Standard plastic straw</option>
                        <option value="Biodegradable">Biodegradable paper straw</option>
                        <option value="Stainless">Stainless steel reusable straw</option>
                        <option value="Bubble">Bubble tea straw (larger diameter for boba)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Flavor:</label>
                    <select id="strawOptions">
                        <option value="none">None</option> 
                        <option value="Standard">Macha</option>
                        <option value="Standard">Red Velvet</option>
                        <option value="Standard">Cookies and Cream</option>
                        <option value="Standard">Taro</option>
                        <option value="Standard">Okinawa </option>
                        <option value="Standard">Dark Chocolate </option>

                        
                    </select>
                </div>
            </div>
        </div>

        <a href="cart.html"><button class="submit-button">Add to Cart</button></a>
        <button type="button" onclick="closeMilkteaModal()" class="cancel-button">Cancel</button>
    </div>
</div>

<!-- Iced Tea Modal -->
<div id="icedTeaModal" class="menu-container">
<span onclick="closeIcedTeaModal()" class="close" title="Close Modal">&times;</span>
    <div class="product-detail-iced-tea">
        <img src="images/IcedTea-removebg-preview.png" alt="Product Image" class="product-image">
        <h1 class="product-name">Iced Tea</h1>
        <p class="product-description">Enjoy your favorite coffee in this beautifully designed cup with a unique coffee theme.</p>
        
        <div class="quantity-control">
            <button class="decreaseQuantity">-</button>
            <span class="quantity">1</span>
            <button class="increaseQuantity">+</button>
        </div>

        <div class="size-select">
            <label for="size">Size:</label>
            <select id="size">
                <option value="Medio">Medio</option>
                <option value="Grande">Grande</option>
                <option value="Venti">Venti</option>
            </select>
        </div>

        <div class="customization-section">
            <h3>Customization</h3>
            <div class="customization-options">
                <div class="customization-option">
                    <label for="Add-Ons">Add Ons (+Php10):</label>
                    <select id="Add-Ons">
                        <option value="">None</option>
                        <option value="Pearl">Pearl</option>
                        <option value="Crystal">Crystal</option>
                        <option value="Cream Cheese">Cream Cheese</option>
                        <option value="Coffee Jelly">Coffee Jelly</option>
                        <option value="Crushed Oreo">Crushed Oreo</option>
                        <option value="Cream Puff">Cream Puff</option>
                        <option value="Cheesecake">Cheesecake</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="cupColor">Cup Color:</label>
                    <select id="cupColor">
                        <option value="white">White</option>
                        <option value="black">Black</option>
                        <option value="brown">Brown</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="stickers">Stickers:</label>
                    <select id="stickers">
                        <option value="none">None</option>
                        <option value="Boba/bubble">Boba/bubble tea illustrations</option>
                        <option value="Cute animals">Cute animals (cats, pandas, etc.)</option>
                        <option value="Food emojis">Food emojis (smiley faces, hearts, stars)</option>
                        <option value="Inspirational">Inspirational quotes</option>
                        <option value="Personalized">Personalized stickers (name, initials)</option>
                    </select>
                </div>
                <div class="customization-option dropdown-container">
                    <label for="preMadeThemes">Pre-made Themes:</label>
                    <select id="preMadeThemes">
                        <option value="">None</option>
                        <option value="Bini">Bini Theme</option>
                        <option value="BlackPink">BlackPink Theme</option>
                        <option value="BTS">BTS Theme</option>
                        <option value="New Jeans">New Jeans Theme</option>
                        <option value="Taylor">Taylor Swift Theme</option>
                        <option value="Twice">Twice Theme</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="accessories">Accessories:</label>
                    <select id="accessories">
                        <option value="none">None</option>
                        <option value="spoon">Cup sleeves (protective, customizable)</option>
                        <option value="lid">Stirrers/spoons (plastic, wooden, metal)</option>
                        <option value="straw">Carrying bag/pouch (reusable, eco-friendly)</option>
                        <option value="straw">Cup holder (for larger cups)</option>
                        <option value="straw">Customized charms/keychains attached to the cup</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="lidType">Lid Type:</label>
                    <select id="lidType">
                        <option value="none">None</option>
                        <option value="Dome">Dome Lid</option>
                        <option value="Flat">Flat Lid</option>
                        <option value="Sip Through">Sip Through Lid</option>
                        <option value="Straw hole lid">Straw hole lid</option>
                        <option value="Custom-designed">Custom-designed lid (with logo or pattern)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Straw Options:</label>
                    <select id="strawOptions">
                        <option value="none">None</option>
                        <option value="Standard">Standard plastic straw</option>
                        <option value="Biodegradable">Biodegradable paper straw</option>
                        <option value="Stainless">Stainless steel reusable straw</option>
                        <option value="Bubble">Bubble tea straw (larger diameter for boba)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Flavor:</label>
                    <select id="strawOptions">
                        <option value="none">None</option> 
                        <option value="Standard">Peach Tea</option>
                        <option value="Standard">Blueberry Lavender</option>
                        <option value="Standard">Hibiscus</option>
                        <option value="Standard">Lemonade</option>
                        <option value="Standard">Iced Mint</option>
                        <option value="Standard">Green Tea</option>
                        <option value="Standard">Black Tea</option>

                        <option value="Standard">Sweet Tea</option>

                        
                    </select>
                </div>
            </div>
        </div>

        <a href="cart.html"><button class="submit-button">Add to Cart</button></a>
        <button type="button" onclick="closeIcedTeaModal()" class="cancel-button">Cancel</button>

    </div>
</div>

<!-- Frappe Modal -->
<div id="frappeModal" class="menu-container">
<span onclick="closeFrappeModal()" class="close" title="Close Modal">&times;</span>   
<div class="product-detail-frappe">
        <img src="images/Frappe-removebg-preview.png" alt="Product Image" class="product-image">
        <h1 class="product-name">Frappe</h1>
        <p class="product-description">Enjoy your favorite coffee in this beautifully designed cup with a unique coffee theme.</p>
        
        <div class="quantity-control">
            <button class="decreaseQuantity">-</button>
            <span class="quantity">1</span>
            <button class="increaseQuantity">+</button>
        </div>

        <div class="size-select">
            <label for="size">Size:</label>
            <select id="size">
                <option value="Medio">Medio</option>
                <option value="Grande">Grande</option>
                <option value="Venti">Venti</option>
            </select>
        </div>

        <div class="customization-section">
            <h3>Customization</h3>
            <div class="customization-options">
                <div class="customization-option">
                    <label for="Add-Ons">Add Ons (+Php10):</label>
                    <select id="Add-Ons">
                        <option value="">None</option>
                        <option value="Pearl">Pearl</option>
                        <option value="Crystal">Crystal</option>
                        <option value="Cream Cheese">Cream Cheese</option>
                        <option value="Coffee Jelly">Coffee Jelly</option>
                        <option value="Crushed Oreo">Crushed Oreo</option>
                        <option value="Cream Puff">Cream Puff</option>
                        <option value="Cheesecake">Cheesecake</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="cupColor">Cup Color:</label>
                    <select id="cupColor">
                        <option value="white">White</option>
                        <option value="black">Black</option>
                        <option value="brown">Brown</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="stickers">Stickers:</label>
                    <select id="stickers">
                        <option value="none">None</option>
                        <option value="Boba/bubble">Boba/bubble tea illustrations</option>
                        <option value="Cute animals">Cute animals (cats, pandas, etc.)</option>
                        <option value="Food emojis">Food emojis (smiley faces, hearts, stars)</option>
                        <option value="Inspirational">Inspirational quotes</option>
                        <option value="Personalized">Personalized stickers (name, initials)</option>
                    </select>
                </div>
                <div class="customization-option dropdown-container">
                    <label for="preMadeThemes">Pre-made Themes:</label>
                    <select id="preMadeThemes">
                        <option value="">None</option>
                        <option value="Bini">Bini Theme</option>
                        <option value="BlackPink">BlackPink Theme</option>
                        <option value="BTS">BTS Theme</option>
                        <option value="New Jeans">New Jeans Theme</option>
                        <option value="Taylor">Taylor Swift Theme</option>
                        <option value="Twice">Twice Theme</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="accessories">Accessories:</label>
                    <select id="accessories">
                        <option value="none">None</option>
                        <option value="spoon">Cup sleeves (protective, customizable)</option>
                        <option value="lid">Stirrers/spoons (plastic, wooden, metal)</option>
                        <option value="straw">Carrying bag/pouch (reusable, eco-friendly)</option>
                        <option value="straw">Cup holder (for larger cups)</option>
                        <option value="straw">Customized charms/keychains attached to the cup</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="lidType">Lid Type:</label>
                    <select id="lidType">
                        <option value="none">None</option>
                        <option value="Dome">Dome Lid</option>
                        <option value="Flat">Flat Lid</option>
                        <option value="Sip Through">Sip Through Lid</option>
                        <option value="Straw hole lid">Straw hole lid</option>
                        <option value="Custom-designed">Custom-designed lid (with logo or pattern)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Straw Options:</label>
                    <select id="strawOptions">
                        <option value="none">None</option>
                        <option value="Standard">Standard plastic straw</option>
                        <option value="Biodegradable">Biodegradable paper straw</option>
                        <option value="Stainless">Stainless steel reusable straw</option>
                        <option value="Bubble">Bubble tea straw (larger diameter for boba)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Flavor:</label>
                    <select id="strawOptions">
                        <option value="none">None</option> 
                        <option value="Standard">Strawberry</option>
                        <option value="Standard">Taro</option>
                        <option value="Standard">Mango</option>
                        <option value="Standard">Avocado</option>
                        <option value="Standard"> Mocha</option>
                        <option value="Standard"> Black Forest</option>

                    </select>
                </div>
            </div>
        </div>

        <a href="cart.html"><button class="submit-button">Add to Cart</button></a>
        <button type="button" onclick="closeFrappeModal()" class="cancel-button">Cancel</button>

    </div>
</div>

<!-- Soda Modal -->
<div id="sodaModal" class="menu-container">
<span onclick="closeSodaModal()" class="close" title="Close Modal">&times;</span>   
    <div class="product-detail-soda">
        <img src="images/Soda-removebg-preview.png" alt="Product Image" class="product-image">
        <h1 class="product-name">Soda</h1>
        <p class="product-description">Enjoy your favorite coffee in this beautifully designed cup with a unique coffee theme.</p>
        
        <div class="quantity-control">
            <button class="decreaseQuantity">-</button>
            <span class="quantity">1</span>
            <button class="increaseQuantity">+</button>
        </div>

        <div class="size-select">
            <label for="size">Size:</label>
            <select id="size">
                <option value="Medio">Medio</option>
                <option value="Grande">Grande</option>
                <option value="Venti">Venti</option>
            </select>
        </div>

        <div class="customization-section">
            <h3>Customization</h3>
            <div class="customization-options">
                <div class="customization-option">
                    <label for="Add-Ons">Add Ons (+Php10):</label>
                    <select id="Add-Ons">
                        <option value="">None</option>
                        <option value="Pearl">Pearl</option>
                        <option value="Crystal">Crystal</option>
                        <option value="Cream Cheese">Cream Cheese</option>
                        <option value="Coffee Jelly">Coffee Jelly</option>
                        <option value="Crushed Oreo">Crushed Oreo</option>
                        <option value="Cream Puff">Cream Puff</option>
                        <option value="Cheesecake">Cheesecake</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="cupColor">Cup Color:</label>
                    <select id="cupColor">
                        <option value="white">White</option>
                        <option value="black">Black</option>
                        <option value="brown">Brown</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="stickers">Stickers:</label>
                    <select id="stickers">
                        <option value="none">None</option>
                        <option value="Boba/bubble">Boba/bubble tea illustrations</option>
                        <option value="Cute animals">Cute animals (cats, pandas, etc.)</option>
                        <option value="Food emojis">Food emojis (smiley faces, hearts, stars)</option>
                        <option value="Inspirational">Inspirational quotes</option>
                        <option value="Personalized">Personalized stickers (name, initials)</option>
                    </select>
                </div>
                <div class="customization-option dropdown-container">
                    <label for="preMadeThemes">Pre-made Themes:</label>
                    <select id="preMadeThemes">
                        <option value="">None</option>
                        <option value="Bini">Bini Theme</option>
                        <option value="BlackPink">BlackPink Theme</option>
                        <option value="BTS">BTS Theme</option>
                        <option value="New Jeans">New Jeans Theme</option>
                        <option value="Taylor">Taylor Swift Theme</option>
                        <option value="Twice">Twice Theme</option>
                    </select>   
                </div>
                <div class="customization-option">
                    <label for="accessories">Accessories:</label>
                    <select id="accessories">
                        <option value="none">None</option>
                        <option value="spoon">Cup sleeves (protective, customizable)</option>
                        <option value="lid">Stirrers/spoons (plastic, wooden, metal)</option>
                        <option value="straw">Carrying bag/pouch (reusable, eco-friendly)</option>
                        <option value="straw">Cup holder (for larger cups)</option>
                        <option value="straw">Customized charms/keychains attached to the cup</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="lidType">Lid Type:</label>
                    <select id="lidType">
                        <option value="none">None</option>
                        <option value="Dome">Dome Lid</option>
                        <option value="Flat">Flat Lid</option>
                        <option value="Sip Through">Sip Through Lid</option>
                        <option value="Straw hole lid">Straw hole lid</option>
                        <option value="Custom-designed">Custom-designed lid (with logo or pattern)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Straw Options:</label>
                    <select id="strawOptions">
                        <option value="none">None</option>
                        <option value="Standard">Standard plastic straw</option>
                        <option value="Biodegradable">Biodegradable paper straw</option>
                        <option value="Stainless">Stainless steel reusable straw</option>
                        <option value="Bubble">Bubble tea straw (larger diameter for boba)</option>
                    </select>
                </div>
                <div class="customization-option">
                    <label for="strawOptions">Flavor:</label>
                    <select id="strawOptions">
                        <option value="none">None</option> 
                        <option value="Standard">Cherry</option>
                        <option value="Standard">Apricot</option>
                        <option value="Standard">Punch</option>
                        <option value="Standard">Lemonade</option>
                        <option value="Standard">Lavender</option>
                        <option value="Standard">Cola</option>

                        
                    </select>
                </div>
            </div>
        </div>

        <a href="cart.html"><button class="submit-button">Add to Cart</button></a>
        <button type="button" onclick="closeSodaModal()" class="cancel-button">Cancel</button>

    </div>
</div>

<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>Contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 09515286682 </a>
            <a href="#"> <i class="fas fa-phone"></i> 09065054199 </a>
            <a href="#"> <i class="fas fa-envelope"></i> bevi@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> Legazpi City, Albay = 4500 </a>
        </div>

        <div class="box">
            <h3>Social Media</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="#"> <i class="fab fa-tiktok"></i> Tiktok </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        </div>

    </div>

    <br>

    <div class="credit"> <span> Bevi </span>     |    all rights reserved </div>

</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const increaseBtns = document.querySelectorAll('.increaseQuantity');
        const decreaseBtns = document.querySelectorAll('.decreaseQuantity');
        const quantitySpans = document.querySelectorAll('.quantity');

        increaseBtns.forEach((increaseBtn, index) => {
            increaseBtn.addEventListener('click', () => {
                quantitySpans[index].textContent = parseInt(quantitySpans[index].textContent) + 1;
            });
        });

        decreaseBtns.forEach((decreaseBtn, index) => {
            decreaseBtn.addEventListener('click', () => {
                if (parseInt(quantitySpans[index].textContent) > 1) {
                    quantitySpans[index].textContent = parseInt(quantitySpans[index].textContent) - 1;
                }
            });
        });
    });

    

    const submitButtons = document.querySelectorAll('.submit-button');

    submitButtons.forEach(submitButton => {
        submitButton.addEventListener('click', () => {
            const productName = submitButton.closest('.menu-container').querySelector('.product-name').textContent;
            const quantity = parseInt(submitButton.closest('.menu-container').querySelector('.quantity').textContent);
            const size = submitButton.closest('.menu-container').querySelector('#size').value;
            const addOns = submitButton.closest('.menu-container').querySelector('#Add-Ons').value;
            const cupColor = submitButton.closest('.menu-container').querySelector('#cupColor').value;
            const stickers = submitButton.closest('.menu-container').querySelector('#stickers').value;
            const preMadeThemes = submitButton.closest('.menu-container').querySelector('#preMadeThemes').value;
            const accessories = submitButton.closest('.menu-container').querySelector('#accessories').value;
            const lidType = submitButton.closest('.menu-container').querySelector('#lidType').value;
            const strawOptions = submitButton.closest('.menu-container').querySelector('#strawOptions').value;
            const price = calculatePrice(productName, size, addOns);

            const productDetails = {
                name: productName,
                quantity: quantity,
                size: size,
                addOns: addOns,
                cupColor: cupColor,
                stickers: stickers,
                preMadeThemes: preMadeThemes,
                accessories: accessories,
                lidType: lidType,
                strawOptions: strawOptions,
                price: price
            };

            console.log('Adding product to cart:', productDetails);
            

            // Retrieve the cart from local storage or initialize an empty array
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            // Push the product details to the cart array
            cart.push(productDetails);
            // Store the updated cart back to local storage
            localStorage.setItem('cart', JSON.stringify(cart));
        });
    });
    
    function calculatePrice(productName, size, addOns) {
        let basePrice;
        switch (productName) {
            case 'Coffee':
                basePrice = 79;
                break;
            case 'Iced Coffee':
                basePrice = 85;
                break;
            case 'Milktea':
                basePrice = 85;
                break;
            case 'Iced Tea':
                basePrice = 79;
                break;
            case 'Frappe':
                basePrice = 90;
                break;
            case 'Soda':
                basePrice = 60;
                break;
            default:
                basePrice = 0;
        }

        let sizePrice = basePrice; // Initialize sizePrice with the base price
        let addOnsPrice = 0;

        // Calculate price based on selected size
        if (size === 'Grande') {
            sizePrice += 10;
        } else if (size === 'Venti') {
            sizePrice += 20;
        }

        // Calculate price based on selected add-ons
        if (addOns !== 'None' && addOns !== 'none' && addOns !== "") {
            addOnsPrice += 10;
        }

        // Calculate total price
        let totalPrice = sizePrice + addOnsPrice;
        return totalPrice;
    }

</script>


</body>
</html>