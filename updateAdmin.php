<?php
    include 'connect.php';

    if (isset($_POST['submit'])) {
        $admin_id = $_POST['admin_id'];
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['contactNumber'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Update the admin data
        $update_sql = "UPDATE `bevi_db`.`admin_acc` 
                       SET admin_fname='$fname', admin_lname='$lname', email='$email', phone='$phone', user='$username', password='$password' 
                       WHERE admin_id='$admin_id'";
        
        if ($conn->query($update_sql) === TRUE) {
            echo '<script>alert("Updated Successfully"); window.location.href = "admin.php";</script>';
        } else {
            echo "Error updating record: " . $conn->error;
        }

        // Close the connection
        $conn->close();
    }
?>
