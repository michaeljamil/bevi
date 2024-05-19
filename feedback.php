<?php
// Include the connection file
include 'connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $rating = $_POST['rating'];
    $product = $_POST['product'];
    $feedback = $_POST['feedback'];

    // Prepare SQL insert statement
    $sql = "INSERT INTO bevi_db.feedback (name, email, date, rating, product_name, feedback_details)
            VALUES ('$name', '$email', '$date', '$rating', '$product', '$feedback')";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Feedback Successfully Sent')
                window.location.href = 'index.php';
                </script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); // Corrected variable name
    }

    // Close database connection
    mysqli_close($conn);
}
?>
