<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "connect.php"; // Include your database connection file
    
    // Get the order ID from the form submission
    $orderId = $_POST['orderId'];

    // Check which action was triggered
    if (isset($_POST['markComplete'])) {
        // Update order status to 'COMPLETED'
        $status = 'COMPLETED';
        $sql = "UPDATE `bevi_db`.`orders` SET status = '$status' WHERE order_id = $orderId";
    } elseif (isset($_POST['markCancelled'])) {
        // Update order status to 'CANCELLED'
        $status = 'CANCELLED';
        $sql = "UPDATE `bevi_db`.`orders` SET status = '$status' WHERE order_id = $orderId";
    }

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the page where orders are displayed
        header("Location: admin.php");
        exit();
    } else {
        echo "Error updating order status: " . $conn->error;
    }

    $conn->close();
}
?>
