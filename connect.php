<?php
   
    //Create connection
    $servername = "localhost";
    $username = "root";
    $password = ""; //Palitan mo na lang pass tas username base sa mysql server mo

    $conn = new mysqli($servername, $username, $password);

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
                    `name` varchar(50) NOT NULL,
                    `email` varchar(50) DEFAULT NULL,
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
                    `order_id` INT NOT NULL AUTO_INCREMENT,
                    `product` VARCHAR(45) NOT NULL,
                    `cup_color` VARCHAR(45) NOT NULL,
                    `add_ons` VARCHAR(45) NOT NULL,
                    `stickers` VARCHAR(45) NOT NULL,
                    `accessories` VARCHAR(45) NOT NULL,
                    `lid_type` VARCHAR(45) NOT NULL,
                    `straw_option` VARCHAR(45) NOT NULL,
                    `pre_made_theme` VARCHAR(45) NOT NULL,
                    `amount` VARCHAR(45) NOT NULL,
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
