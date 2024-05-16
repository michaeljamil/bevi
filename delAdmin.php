<?php
    include 'connect.php';

    if (isset($_GET['admin_id'])) {
        $admin_id = $_GET['admin_id'];

        // Delete the admin data
        $delete_sql = "DELETE FROM `bevi_db`.`admin_acc` WHERE admin_id='$admin_id'";
        
        if ($conn->query($delete_sql) === TRUE) {
            echo '<script>alert("Deleted Successfully"); window.location.href = "admin.php";</script>';
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        // Close the connection
        $conn->close();
    } else {
        echo '<script>alert("No admin ID provided"); window.location.href = "admin.php";</script>';
    }
?>
