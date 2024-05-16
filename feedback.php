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
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
