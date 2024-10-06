<?php
include 'config.php';

// Initialize variables with default values
$fullName = "";
$phone = "";
$email = "";
$available = "";
$vehicalType = "";
$vehicalNumber = "";
$hireDate = "";
$orderId = "";
$ordeName = "";
$orderDetails = "";

// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute SQL query to fetch the specific delivery
    $stmt = $conn->prepare("SELECT * FROM delivery WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a delivery was found
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fullName = $row['fullName'];
        $phone = $row['phone'];
        $email = $row['email'];
        $available = $row['available'];
        $vehicalType = $row['vehicalType'];
        $vehicalNumber = $row['vehicalNumber'];
        $hireDate = $row['hireDate'];
        $orderId = $row['orderId'];
        $ordeName = $row['ordeName'];
        $orderDetails = $row['orderDetails'];
    } else {
        // Handle the case where no data is found
        echo "<script>alert('No delivery found with that ID.'); window.location.href='deliverys.php';</script>";
        exit; // Stop the script execution
    }
} else {
    // Handle the case where no ID is provided
    echo "<script>alert('No delivery ID provided.'); window.location.href='deliverys.php';</script>";
    exit; // Stop the script execution
}

// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Delivery</title>
    <link rel="stylesheet" href="src/css/delivery.css">
</head>

<body>
    <div class="from_fulll_main">
        <div class="from_fulll">
            <p class="order_topic">Update Details </p>
            <form method="post" action="update.php?id=<?php echo htmlspecialchars($id); ?>" id="orderForm" onsubmit="return validateForm()">
                <div class="from_deliver">
                    <div class="coulmadd">
                        <p class="subtopic">driver details</p>
                        <div>
                            <label for="fullName">Full Name:</label><br />
                            <input class="input" type="text" id="fullName" name="fullName" value="<?php echo htmlspecialchars($fullName); ?>" required />
                        </div>
                        <div>
                            <label for="phone">Phone:</label><br />
                            <input class="input" type="text" maxlength="10" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required />
                        </div>
                        <div>
                            <label for="email">Email:</label><br />
                            <input class="input" type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required />
                        </div>
                        <div>
                            <label for="available">Available:</label><br />
                            <select class="input" id="available" name="available" required>
                                <option value="">Select Availability</option>
                                <option value="Available" <?php if ($available == "Available") echo "selected"; ?>>Available</option>
                                <option value="Not Available" <?php if ($available == "Not Available") echo "selected"; ?>>Not Available</option>
                            </select>
                        </div>
                        <div>
                            <label for="vehicalType">Vehicle Type:</label><br />
                            <input class="input" type="text" id="vehicalType" name="vehicalType" value="<?php echo htmlspecialchars($vehicalType); ?>" required />
                        </div>
                        <div>
                            <label for="vehicalNumber">Vehicle Number:</label><br />
                            <input class="input" type="text" id="vehicalNumber" name="vehicalNumber" value="<?php echo htmlspecialchars($vehicalNumber); ?>" required />
                        </div>
                        <div>
                            <label for="hireDate">Hire Date:</label><br />
                            <input class="input" type="date" id="hireDate" name="hireDate" value="<?php echo htmlspecialchars($hireDate); ?>" required />
                        </div>
                    </div>
                    <div class="coulmadd">
                        <p class="subtopic">order details</p>
                        <div>
                            <label for="orderId">Order ID:</label><br />
                            <input class="input" type="text" id="orderId" name="orderId" value="<?php echo htmlspecialchars($orderId); ?>" required />
                        </div>
                        <div>
                            <label for="ordeName">Order Name:</label><br />
                            <input class="input" type="text" id="ordeName" name="ordeName" value="<?php echo htmlspecialchars($ordeName); ?>" required />
                        </div>
                        <div>
                            <label for="orderDetails">Order Details:</label><br />
                            <textarea class="input" rows="4" id="orderDetails" name="orderDetails" required><?php echo htmlspecialchars($orderDetails); ?></textarea>
                        </div>
                        <img src="src/img/adgif.gif" class="dligi" />
                    </div>
                </div>


                <div>
                    <button class="formbt" type="submit">update</button>
                </div>
            </form>
        </div>
    </div>

    <script src="src/js/delivery.js"></script>
</body>

</html>