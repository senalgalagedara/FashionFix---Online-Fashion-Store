<?php
// Include database connection file
include 'config.php';

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $available = $_POST['available'];
    $vehicalType = $_POST['vehicalType'];
    $vehicalNumber = $_POST['vehicalNumber'];
    $hireDate = $_POST['hireDate'];
    $orderId = $_POST['orderId'];
    $ordeName = $_POST['ordeName'];
    $orderDetails = $_POST['orderDetails'];


    // Insert data into the contactus table
    $sql = "INSERT INTO delivery (fullName, phone, email, available, vehicalType,vehicalNumber, hireDate, orderId, ordeName, orderDetails) 
            VALUES ('$fullName', '$phone', '$email', '$available', '$vehicalType','$vehicalNumber', '$hireDate', '$orderId', '$ordeName', '$orderDetails')";

    if ($conn->query($sql) === true) {

        // After your data insertion logic
        echo "<script>
            alert('Data inserted successfully.');
            window.location.href = 'DeliveryDetails.php';
        </script>";
        // Redirect to the thank you page
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}

// Close connection
$conn->close();
