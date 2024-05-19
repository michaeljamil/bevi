<?php
session_start();
include "connect.php";

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true || !isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $address = $_POST['address'];

    $sql = "UPDATE `bevi_db`.`customer` SET firstName = ?, lastName = ?, address = ? WHERE username = ? AND email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $firstName, $lastName, $address, $username, $email);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Profile updated successfully.";
    } else {
        $_SESSION['message'] = "Error updating profile.";
    }

    header("Location: profile.php");
    exit;
}
?>
