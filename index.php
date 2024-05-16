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
<body>
    

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <h1 class="logo">Bevi </h1>

    <nav class="navbar">
        <a href="#home">HOME</a>
        <a href="#about">ABOUT</a>
        <a href="#menu">DRINKS</a>
        <a href="cart.html">CART</a>
        <a href="#review">REVIEW</a>
    </nav>

    <?php
        // Check if user is logged in
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
            // If logged in, display logout button
            echo '<a href="logout.php" class="btn" id="logoutBtn">Log out</a>';
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
    <h1 class="heading"> Popular <span> Pre Made Themes</span> </h1>    

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

    <h1 class="heading"> about us <span>get to know us</span> </h1>    

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

    <h1 class="heading"> our menu <span>choose your drink</span> </h1>

    <div class="box-container">

        <a href="productCustomization.html" class="box">
            <img src="images/coffee.png" alt="">
            <div class="content">
                <h3>Hot Coffee</h3>
                <p>Indulge in the rich aroma and comforting warmth of freshly brewed beans with our Hot Coffee. Perfect for early mornings or late nights, this classic beverage offers a revitalizing boost of energy with every sip.</p>
            </div>
        </a>

        <a href="#" class="box">
            <img src="images/iced coffee.png" alt="">
            <div class="content">
                <h3>Iced Coffee</h3>
                <p>Cool down and refresh with our Iced Coffee, a chilled delight that invigorates with every sip. Balanced flavors, combined with a refreshing chill, make it the perfect companion for any time of day.</p>
            </div>
        </a>

        <a href="#" class="box">
            <img src="images/milktea.png" alt="">
            <div class="content">
                <h3>Milktea</h3>
                <p>Experience creamy perfection with our Milktea, crafted to satisfy even the most discerning tea enthusiasts. Choose from a variety of flavors and enjoy the perfect blend of sweetness and creaminess in every sip.</p>
            </div>
        </a>

        <a href="#" class="box">
            <img src="images/iced tea.png" alt="">
            <div class="content">
                <h3>Iced Tea</h3>
                <p>Enjoy a classic refreshment with our Iced Tea, a timeless favorite that offers a cool and revitalizing escape. With a variety of flavors to choose from, every sip is a journey into refreshing bliss.</p>
            </div>
        </a>

        <a href="#" class="box">
            <img src="images/frappe.png" alt="">
            <div class="content">
                <h3>Frappe</h3>
                <p>Indulge your senses with our Frappes, a symphony of blended goodness that combines creamy textures with decadent toppings. Each sip offers a delightful escape into a world of indulgence and satisfaction.</p>
            </div>
        </a>

        <a href="#" class="box">
            <img src="images/soda.png" alt="">
            <div class="content">
                <h3> Soda</h3>
                <p>Quench your thirst with our selection of Sodas, offering a fizzy burst of flavor that delights the senses and refreshes the palate. Choose from a variety of flavors and enjoy a bubbly treat anytime, anywhere.</p>
            </div>
        </a>

    </div>

</section>

<section class="review" id="review">
    <h1 class="heading"> reviews <span>Their thoughts</span> </h1>
    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <?php
            // Include the file that connects to the database
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
    <button onclick="openFeedbackModal()" class="review-btn">Give Feedback</a>
</section>


<!-- The Modal -->
<div id="feedbackModal" class="modal">
    <span onclick="closeFeedbackModal()" class="close" title="Close Modal">&times;</span>
  
    <!-- Modal Content -->
    <form class="modal-content animate" action="feedback.php" method="post">
      <!--<div class="imgcontainer">
        <img src="images/customer01.jpg" alt="Avatar" class="avatar">
      </div>
    -->
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


</body>
</html>