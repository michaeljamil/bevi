<?php
   
    //Create connection
    $servername = "localhost";
    $username = "root";
    $password = "0907Mairu-kun!/"; //Palitan mo na lang pass tas username base sa mysql server mo
    $database ="bevi_db";
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //Create database "bevi_db" if there is no existing database
    $sql = "CREATE DATABASE IF NOT EXISTS bevi_db";
    //Catches error creating databse
    if (!$conn->query($sql)) {
        echo "Error creating database: " . $conn->error;
    }

    $sqlCust = "CREATE TABLE IF NOT EXISTS `bevi_db`.`customer` (
                    `customer_id` int NOT NULL AUTO_INCREMENT,
                    `firstName` varchar(50) NOT NULL,
                    `lastName` varchar(45) NOT NULL,
                    `address` varchar(255) NULL,
                    `email` varchar(50) NOT NULL,
                    `username` varchar(50) NOT NULL,
                    `password` varchar(255) NOT NULL,
                    PRIMARY KEY (`customer_id`)
                )";
    $sqlAdmin = "CREATE TABLE IF NOT EXISTS `bevi_db`.`admin_acc` (
                    `admin_id` int NOT NULL AUTO_INCREMENT,
                    `admin_lname` varchar(50) NOT NULL,
                    `admin_fname` varchar(50) NOT NULL,
                    `email` varchar(50) DEFAULT NULL,
                    `phone` varchar(50) NOT NULL,
                    `user` varchar(50) NOT NULL,
                    `password` varchar(255) NOT NULL,
                    PRIMARY KEY (`admin_id`)
                )";
    $sqlFeedback = "CREATE TABLE IF NOT EXISTS `bevi_db`.`feedback` (
                    `feedback_id` int NOT NULL AUTO_INCREMENT,
                    `name` varchar(45) DEFAULT NULL,
                    `email` varchar(45) DEFAULT NULL,
                    `date` date DEFAULT NULL,
                    `rating` int DEFAULT NULL,
                    `product_name` varchar(45) DEFAULT NULL,
                    `feedback_details` mediumtext,
                    PRIMARY KEY (`feedback_id`)
                )";
    $sqlOrder = "CREATE TABLE IF NOT EXISTS `bevi_db`.`orders` (
                    `order_id` int NOT NULL AUTO_INCREMENT,
                    `customer_name` varchar(45) NOT NULL,
                    `date` date NOT NULL,
                    `status` varchar(45) NOT NULL,
                    `address` varchar(255) NOT NULL,
                    `phone` varchar(15) NOT NULL,
                    `paymentMethod` varchar(45) NOT NULL,
                    `total_amount` int NOT NULL,
                    `message` text,
                    PRIMARY KEY (`order_id`)
                )";
                

    if (!$conn->query($sqlCust)) {
        echo "Error creating Table: " . $conn->error;
    }
    if (!$conn->query($sqlAdmin)) {
        echo "Error creating Table: " . $conn->error;
    }
    if (!$conn->query($sqlFeedback)) {
        echo "Error creating Table: " . $conn->error;
    }
    if (!$conn->query($sqlOrder)) {
        echo "Error creating Table: " . $conn->error;
    }
?>
