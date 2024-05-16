<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/admin-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rethink+Sans:ital@1&display=swap" rel="stylesheet">

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title-logo">Bevi</span>
                    </a>
                </li>

                <li>
                    <a href="#main">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#customers">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#orders">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title">Orders</span>
                    </a>
                </li>

                <li>
                    <a href="#feedbacks">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Feedbacks</span>
                    </a>
                </li>

                <li>
                    <a href="#adminaccounts">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Admin Accounts</span>
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div id="main" class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here" name="search">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="images/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="images/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
            <!-- ========================= Customers ==================== -->

            <div id="customers" class="main">
            
                <div class="topbar">
                    <div class="toggle" onclick="toggleMenu()">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
            
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search here" name="search">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
            
                    <div class="user">
                        <img src="images/customer01.jpg" alt="">
                    </div>
                </div>
            
                <div class="customerdetails">
                    <div class="manager">
                        <table class="striped-table">
                            <thead>
                                <tr>
                                    <th scope="col">Customer ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // Include the file that connects to the database
                                    include 'connect.php';

                                    // Query to select all rows from the customer table
                                    $sql = "SELECT * FROM bevi_db.customer";
                                    $result = mysqli_query($conn, $sql);

                                    // Check if there are any rows returned
                                    if (mysqli_num_rows($result) > 0) {
                                        // Output data of each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<th scope='row'>" . $row["customer_id"] . "</th>";
                                            echo "<td>" . $row["name"] . "</td>";
                                            echo "<td>" . $row["email"] . "</td>";
                                            echo "<td>" . $row["username"] . "</td>";
                                            echo "<td>" . $row["password"] . "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>0 results</td></tr>";
                                    }

                                    // Close the connection
                                    mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            



             <!-- ========================= Orders ==================== -->

             <div id="orders" class="main">
                <div class="topbar">
                    <div class="toggle" onclick="toggleMenu()">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
            
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search here" name="search">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
            
                    <div class="user">
                        <img src="images/customer01.jpg" alt="">
                    </div>
                </div>
            
                <div class="orderdetails">
                    <div class="manager">
                        <table class="striped-table">
                            <thead>
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer ID</th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Order Status</th>
                                    <th scope="col">Items Ordered</th>
                                    <th scope="col">Shipping Address</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col"> Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                <!-- Customer records will be dynamically inserted here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- ========================= Feedbacks ==================== -->

            <div id="feedbacks" class="main">
                <div class="topbar">
                    <div class="toggle" onclick="toggleMenu()">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
            
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search here" name="search">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
            
                    <div class="user">
                        <img src="images/customer01.jpg" alt="">
                    </div>
                </div>
            
                <div class="feedbacksdetail">
                    <div class="manager">
                        <table class="striped-table">
                            <thead>
                                <tr>
                                    <th scope="col">Feedback ID</th>
                                    <th scope="col">Customer ID</th>
                                    <th scope="col">Feedback Date</th>
                                    <th scope="col">Feedback Rating</th>
                                    <th scope="col">Feedback Comments</th>
                                    <th scope="col">Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Customer records will be dynamically inserted here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

             <!-- ========================= Accounts ==================== -->
             
            <div id="adminaccounts" class="main">
                <div class="topbar">
                    <div class="toggle" onclick="toggleMenu()">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
            
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
            
                    <div class="user">
                        <img src="images/customer01.jpg" alt="">
                    </div>
                </div>
                <button class="add-btn" onclick="openAddAdminModal()">Register Admin</button>
                <div class="adminaccountsdetail">
                    <div class="manager">
                        <table class="striped-table">
                            <thead>
                                <tr>
                                    <th scope="col">Admin ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // Include the file that connects to the database
                                    include 'connect.php';

                                    // Query to select all rows from the admin table
                                    $sql = "SELECT * FROM bevi_db.admin_acc";
                                    $result = mysqli_query($conn, $sql);

                                    // Check if there are any rows returned
                                    if (mysqli_num_rows($result) > 0) {
                                        // Output data of each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<th scope='row'>" . $row["admin_id"] . "</th>";
                                            echo "<td>" . $row["admin_fname"] . "</td>";
                                            echo "<td>" . $row["admin_lname"] . "</td>";
                                            echo "<td>" . $row["email"] . "</td>";
                                            echo "<td>" . $row["phone"] . "</td>";
                                            echo "<td>" . $row["user"] . "</td>";
                                            echo "<td>" . $row["password"] . "</td>";
                                            echo "<td>";
                                            echo '<button class="update-btn" onclick="openUpdateAdminModal(' . $row["admin_id"] . ', \'' . $row["admin_fname"] . '\', \'' . $row["admin_lname"] . '\', \'' . $row["email"] . '\', \'' . $row["phone"] . '\', \'' . $row["user"] . '\', \'' . $row["password"] . '\')">Update</button>';
                                            echo '<button class="delete-btn" onclick="deleteAdmin(' . $row["admin_id"] . ')">Delete</button>';
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='8'>0 results</td></tr>";
                                    }

                                    // Close the connection
                                    mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
    <!-- Modal -->
<div id="addAdminModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeAddAdminModal()">&times;</span>
        <h2>Register Admin</h2>
        <form id="addAdminForm" action="addAdmin.php" method="post">            
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName"><br><br>
            
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName"><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            
            <label for="contactNumber">Contact Number:</label>
            <input type="text" id="contactNumber" name="contactNumber"><br><br>
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>

            <label for="conf_password">Confirm Password:</label>
            <input type="password" id="password" name="conf_password"><br><br>
            
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</div>

<!-- Update Admin Modal -->
<div id="updateAdminModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeUpdateAdminModal()">&times;</span>
        <h2>Update Admin</h2>
        <form id="updateAdminForm" action="updateAdmin.php" method="post">            
            <input type="hidden" id="updateAdminId" name="admin_id">
            
            <label for="updateFirstName">First Name:</label>
            <input type="text" id="updateFirstName" name="firstName"><br><br>
            
            <label for="updateLastName">Last Name:</label>
            <input type="text" id="updateLastName" name="lastName"><br><br>
            
            <label for="updateEmail">Email:</label>
            <input type="email" id="updateEmail" name="email"><br><br>
            
            <label for="updateContactNumber">Contact Number:</label>
            <input type="text" id="updateContactNumber" name="contactNumber"><br><br>
            
            <label for="updateUsername">Username:</label>
            <input type="text" id="updateUsername" name="username"><br><br>

            <label for="updatePassword">Password:</label>
            <input type="password" id="updatePassword" name="password"><br><br>

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</div>

            
           

    <!-- =========== Scripts =========  -->
    <script src="js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>