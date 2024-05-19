<?php
session_start();
include "connect.php";

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true || !isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

$loggedUser = $_SESSION['username'];
$loggedEmail = $_SESSION['email'];

// Fetch user details
$sql = "SELECT * FROM `bevi_db`.`customer` WHERE username = ? AND email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $loggedUser, $loggedEmail);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $customerId = $row['customer_id']; // Assuming 'id' is the primary key in 'customer' table
    $email = $row['email'];
    $first_name = $row['firstName'];
    $last_name = $row['lastName'];
    $address = $row['address'];
} else {
    echo "User not found in the database.";
    exit;
}

// Fetch order history
$orderHistorySql = "SELECT * FROM `bevi_db`.`orders` WHERE order_id = ?";
$orderStmt = $conn->prepare($orderHistorySql);
$orderStmt->bind_param("i", $customerId);
$orderStmt->execute();
$orderResult = $orderStmt->get_result();
$orderHistory = [];
if ($orderResult && $orderResult->num_rows > 0) {
    while ($orderRow = $orderResult->fetch_assoc()) {
        $orderHistory[] = $orderRow;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bevi</title>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Rethink+Sans:ital@1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/profile.css">
</head>
<body>
<a href="index.php">
    <button id="backButton" class="back-button">
        <i class="fas fa-chevron-left"></i> Back
    </button>
</a>
<div class="container-fluid mt--2">
    <div class="row">
        <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">My Profile</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button class="btn" id="editProfileBtn">Edit Profile</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">Username</label>
                                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo htmlspecialchars($loggedUser); ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Email address</label>
                                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-first-name">First name</label>
                                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="<?php echo htmlspecialchars($first_name); ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-last-name">Last name</label>
                                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo htmlspecialchars($last_name); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <h6 class="heading-small text-muted mb-4">Contact information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-address">Address</label>
                                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo htmlspecialchars($address); ?>" readonly type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="heading-small text-muted mb-4">Order History</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group focused">
                                        <?php if (!empty($orderHistory)): ?>
                                            <ul class="order-history-list">
                                                <?php foreach ($orderHistory as $order): ?>
                                                    <li>
                                                        <strong>Order ID:</strong> <?php echo htmlspecialchars($order['order_id']); ?><br>
                                                        <strong>Date:</strong> <?php echo htmlspecialchars($order['date']); ?><br>
                                                        <strong>Total:</strong> ₱<?php echo htmlspecialchars($order['total_amount']); ?><br>
                                                        <strong>Status:</strong> <?php echo htmlspecialchars($order['status']); ?><br>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php else: ?>
                                            <p>No orders found.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div id="profileModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form id="editProfileForm" method="post" action="update_profile.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($loggedUser); ?>"><br><br>

            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first-name" value="<?php echo htmlspecialchars($first_name); ?>"><br><br>

            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last-name" value="<?php echo htmlspecialchars($last_name); ?>"><br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($address); ?>"><br><br>

            <div class="button-container">
                <input type="submit" class="btn" name="submit" value="Save Changes">
            </div>
        </form>
    </div>
</div>

<script>
    var modal = document.getElementById("profileModal");
    var btn = document.getElementById("editProfileBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>
