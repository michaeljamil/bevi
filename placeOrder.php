<?php
    include "connect.php";
    session_start();

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "connect.php"; // Include your database connection file

        // Get form data
        $name = $_POST['name'];
        $address = $_POST['address'];
        //$email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $paymentMethod = $_POST['paymentMethod'];
        $totalAmount = $_POST['totalAmount']; 


        // Insert into database
        $sql = "INSERT INTO `bevi_db`.`orders` (customer_name, address, message, paymentMethod, date, status, total_amount) VALUES ('$name', '$address', '$message', '$paymentMethod', NOW(), 'PENDING', '$totalAmount')";
        
        if ($conn->query($sql) === TRUE) {
            
            echo '<script>
                    alert("Order placed successfully!");
                    window.location.href = "index.php"; // Redirect to your desired success page
                  </script>';
            // Additional actions after successful order placement
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
