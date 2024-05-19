<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Rethink+Sans:ital@1&display=swap" rel="stylesheet">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #343a40;
            margin: 0;
            padding: 0;
            background-image: url(images/bevi-bg.jpg);
            background-repeat: no-repeat;
            background-size: cover; /* or background-size: contain; */            
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        h1 {
            color: #8d7066;
            margin: 10px 0;
            font-size: 40px;
        }

        .content {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .product-list {
            width: 100%;
        }

        .checkout-form {
            width: 100%;
        }

        .product {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            margin-bottom: 15px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .product img {
            max-width: 120px;
            max-height: 120px;
            width: auto;
            height: auto;
            border-radius: 10%;
            margin-right: 10px;
        }

        .product-details {
            flex: 1;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .product-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-right: auto;
        }

        .product-info h2,
        .product-info p {
            margin: 0;
        }

        .order-summary h3{
            font-size: 30px;
            text-align: center;
        }
        .order-summary p {
            margin: 5px 0;
            font-size: 1.5rem; /* Adjust the font size as needed */
        }


        h2 {
            color: #5c4b45;
            margin: 10px 0;
            font-size: 20px;
        }

        .checkout-form {
            border: 3px solid #dd6b29;
            border-radius: 10px;
            padding: 20px;
            background-color: rgba(210, 183, 150, 0.8);
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 550px;
        }

        .form-group {
            width: 420px;
            margin-bottom: 15px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #dee2e6;
            display: block;
            margin: 0 auto;
        }

        .order-btn {
            width: 420px;
            padding: 15px;
            background-color: #b06a53;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
            font-size: 20px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .order-btn:hover {
            background-color: #d09d8c;
        }

        .back-button {
            position: fixed;
            left: 50px;
            top: 20px;
            background-color: #d09d8c;
            width: 200px;
            color: white;
            padding: 10px;
            cursor: pointer;
            border-radius: 5%;
            font-size: 18px;
            transition: background-color 0.3s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .back-button:hover {
            background-color: #b06a53;
        }

        .order-summary {
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            margin-top: 20px;
        }

        .order-summary h3 {
            margin: 0 0 10px 0;
            color: #8d7066;
        }

        .order-summary p {
            margin: 5px 0;
            font-size: 20px;
        }
        .customizations {
            display: block;
            font-size: 13px;
            color: #777;
            margin-bottom: 5px;
        }

        @media (min-width: 768px) {
            .content {
                flex-direction: row;
                justify-content: space-between;
            }

            .product-list,
            .checkout-form {
                width: 48%;
            }
        }
    </style>
</head>

<body>

    <a href="cart.html">
        <button id="backButton" class="back-button">
            <i class="fas fa-chevron-left"></i> Back
        </button>
    </a>

    <div class="container">
        <h1>Checkout Form</h1>
        <div class="content">
            <div class="product-list">
                <!-- Dynamic cart items will be inserted here -->
                <div id="cartItems"></div>

                <div class="order-summary">
                    <h3>Order Summary</h3>
                    <p id="subtotal">Subtotal: Php0.00</p>
                    <p id="shipping">Shipping: Php30.00</p>
                    <p id="total">Total: Php5.00</p>
                </div>
            </div>
            <div class="checkout-form" >
                <h2>Recipient Information</h2>
                <form id="checkoutForm" method="post" action="placeOrder.php" onsubmit="setTotalAmount()">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" id="nameInput">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" placeholder="Address" id="addressInput">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email Address" id="emailInput">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Phone Number" id="phoneInput">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message for Seller" name="message" id="messageInput" rows="4" cols="63"></textarea>
                    </div>                    
                    <div class="form-group">
                        <select name="paymentMethod" id="paymentMethod" required>
                            <option value="" disabled selected>Select Payment Method</option>
                            <option value="COD">Cash on Delivery</option>
                            <option value="Gcash">Gcash</option>
                            <option value="Paymaya">Paymaya</option>
                        </select>
                    </div>
                    <input type="hidden" name="totalAmount" id="totalAmount">
                    <button type="submit" class="order-btn">Place Order</button>
                </form>


                <?php
                    
                    include "connect.php";

                    // Check if the user is logged in
                    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true && isset($_SESSION['username']) && isset($_SESSION['email'])) {
                        // Retrieve logged-in user's information from the database
                        $loggedUser = $_SESSION['username'];
                        $loggedEmail = $_SESSION['email'];
                        $sql = "SELECT * FROM `bevi_db`.`customer` WHERE username = '$loggedUser' AND email = '$loggedEmail'";
                        $result = $conn->query($sql);

                        if ($result && $result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            // Output JavaScript code to set form field values
                            echo "
                                <script>
                                    document.getElementById('nameInput').value = '" . $row['firstName'] . " " . $row['lastName'] . "';
                                    document.getElementById('emailInput').value = '" . $row['email'] . "';
                                </script>
                            ";
                        } else {
                            echo "// User not found";
                        }
                        
                    } else {
                        echo "// Not logged in";
                    }

                    $conn->close();
                ?>

                <!-- <a href="javascript:openplaceOrderModal()"> -->
                
                <!-- </a> -->
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            const cartItems = document.getElementById('cartItems');
            const cartData = JSON.parse(localStorage.getItem('cart')) || [];
            if (cartData.length > 0) {
                cartData.forEach(item => {
                    const productDiv = document.createElement('div');
                    productDiv.classList.add('product');

                    const imgElement = document.createElement('img');
                    imgElement.src = `images/${item.name.replace(/\s+/g, '')}-removebg-preview.png`;
                    imgElement.alt = item.name;

                    const detailsDiv = document.createElement('div');
                    detailsDiv.classList.add('product-details');

                    const infoDiv = document.createElement('div');
                    infoDiv.classList.add('product-info');

                    const nameElement = document.createElement('h2');
                    nameElement.textContent = item.name;

                    let finalItemPrice = item.price * item.quantity;
                    const priceElement = document.createElement('p');
                    priceElement.classList.add('price');
                    priceElement.textContent = `Php${finalItemPrice.toFixed(2)}`;

                    const customizationsElement = document.createElement('span');
                    customizationsElement.classList.add('customizations');

                    const customizations = [];

                    if (item.size && item.size !== 'None') {
                        customizations.push(`Size: ${item.size}`);
                    }
                    if (item.addOns && item.addOns !== 'None') {
                        customizations.push(`Add-ons: ${item.addOns}`);
                    }
                    if (item.cupColor && item.cupColor !== 'None') {
                        customizations.push(`Cup Color: ${item.cupColor}`);
                    }
                    if (item.stickers && item.stickers !== 'None') {
                        customizations.push(`Stickers: ${item.stickers}`);
                    }
                    if (item.lidType && item.lidType !== 'None') {
                        customizations.push(`Lid Type: ${item.lidType}`);
                    }
                    if (item.preMadeThemes && item.preMadeThemes !== 'None') {
                        customizations.push(`Pre-Made Themes: ${item.preMadeThemes}`);
                    }
                    if (item.strawOptions && item.strawOptions !== 'None') {
                        customizations.push(`Straw Options: ${item.strawOptions}`);
                    }

                    customizationsElement.innerHTML = customizations.join(' | ');

                    const quantityElement = document.createElement('p');
                    quantityElement.classList.add('quantity-display');
                    quantityElement.textContent = `x${item.quantity}`;

                    infoDiv.appendChild(nameElement);
                    infoDiv.appendChild(customizationsElement);
                    infoDiv.appendChild(priceElement);
                    infoDiv.appendChild(quantityElement);
                    detailsDiv.appendChild(infoDiv);
                    productDiv.appendChild(imgElement);
                    productDiv.appendChild(detailsDiv);

                    cartItems.appendChild(productDiv);

                    
                });

                // const cart = JSON.parse(localStorage.getItem('cart')) || [];
                // const cartInput = document.getElementById('cartInput');
                // if (cart.length > 0) {
                //     cartInput.value = JSON.stringify(cart);
                // }

                // Calculate and update the order summary
                const subtotalElement = document.getElementById('subtotal');
                const totalElement = document.getElementById('total');
                const shippingCost = 30.00;
                let subtotal = 0;

                cartData.forEach(item => {
                    subtotal += item.price * item.quantity;
                });

                subtotalElement.textContent = `Subtotal: Php${subtotal.toFixed(2)}`;
                totalElement.textContent = `Total: Php${(subtotal + shippingCost).toFixed(2)}`;
            } else {
                cartItems.innerHTML = '<div>Your cart is empty.</div>';
            }

            // Checkout form submission
            document.getElementById('checkoutForm').addEventListener('submit', function(event) {
                event.preventDefault();

                // Get the form values
                const name = document.getElementById('nameInput').value;
                const address = document.getElementById('addressInput').value;
                const email = document.getElementById('emailInput').value;
                const phone = document.getElementById('phoneInput').value;
                const message = document.getElementById('messageInput').value;
                const paymentMethod = document.getElementById('paymentMethod').value;

                // Simple validation
                if (!name || !address || !email || !phone || !paymentMethod) {
                    alert('Please fill in all the fields.');
                    return;
                }

                this.submit();
                clearLocalStorage()
                //placeOrder();
            });
        };

        function setTotalAmount() {
            var totalElement = document.getElementById("total");
            var totalAmountInput = document.getElementById("totalAmount");
            var totalText = totalElement.innerText;

            // Extract numeric value from the text
            var totalAmount = parseFloat(totalText.replace(/[^\d.-]/g, ''));
            totalAmountInput.value = totalAmount.toFixed(2); // Ensure it's formatted as a number with two decimal places
        }
        function clearLocalStorage() {
            localStorage.removeItem('cart');
        }


        // Placeholder function to simulate order placement
        // function placeOrder() {
        //             alert('Order placed successfully!');
        //             // You can add more actions here, like sending the data to a server
        //             localStorage.removeItem('cart');
        //         }


    </script>

</body>

</html>
