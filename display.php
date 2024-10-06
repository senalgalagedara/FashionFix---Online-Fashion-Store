<?php
// Include database connection file
include 'config.php';

if ($conn) {
    // SQL query to select messages
    $sql = "SELECT id, fullName, phone, email, available, vehicalType,vehicalNumber, hireDate, orderId, ordeName, orderDetails FROM delivery";
    $result = $conn->query($sql);

    // Check if there are results and output data of each row
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='delivery-card'>
           <p class='delivery-avialible'>" . htmlspecialchars($row["available"]) . "</p>

               <img src='src/img/pro.png' class='propng' alt='Delivery Image' />
         
                               <p class='delivery-name'>" . htmlspecialchars($row["fullName"]) . "</p>
                <p class='delivery-data'><b>Vehical Type:</b> " . htmlspecialchars($row["vehicalType"]) . "</p>
                <p class='delivery-data'><b>Vehical Number:</b> " . htmlspecialchars($row["vehicalNumber"]) . "</p>
                <p class='delivery-data'><b>Date Hired:</b> " . htmlspecialchars($row["hireDate"]) . "</p>
                <p class='delivery-data'><b>Phone:</b> " . htmlspecialchars($row["phone"]) . "</p>
                <p class='delivery-data'><b>Email: </b>" . htmlspecialchars($row["email"]) . "</p>
                <p class='delivery_data_topic'>Order Details</p>
                <p class='delivery-data'><b>Order ID:</b> " . htmlspecialchars($row["orderId"]) . "</p>
                <p class='delivery-data'><b>Order Name:</b> " . htmlspecialchars($row["ordeName"]) . "</p>
                <p class='delivery-data'><b>Order Details: </b><br/>" . htmlspecialchars($row["orderDetails"]) . "</p>
            <div class='delivery-card-actions'>
                <button class='delivery-update-btn' onclick='window.location.href=\"updateDelivery.php?id=" . $row["id"] . "\"'>Update</button>
                <form method='POST' action='delete.php' onsubmit='return confirm(\"Are you sure you want to delete this Details?\");'>
                    <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                    <button type='submit' class='delivery-delete-btn'>Delete</button>
                </form>
            </div>
          </div>";
        }
    } else {
        echo "<tr><td colspan='7'>No found.</td></tr>";
    }
} else {
    echo "Database connection error.";
}

// Close the connection
$conn->close();
