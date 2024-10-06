<?php
include 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id'])) {
    $id = $_GET['id'];
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


    // Prepare and execute SQL query to update the specific message
    $stmt = $conn->prepare("UPDATE delivery SET fullName = ?, phone = ?, email = ?, available = ?, vehicalType = ?, vehicalNumber = ?, hireDate = ?, orderId = ? , ordeName = ?, orderDetails = ? WHERE id = ?");
    $stmt->bind_param("ssssssssssi", $fullName, $phone, $email, $available, $vehicalType, $vehicalNumber, $hireDate, $orderId, $ordeName, $orderDetails, $id);

    if ($stmt->execute()) {
        // Redirect to a success page or show a success message
        echo "<script>alert('updated successfully.'); window.location.href='DeliveryDetails.php';</script>";
    } else {
        // Handle the error
        echo "<script>alert('Failed to update.'); window.history.back();</script>";
    }

    $stmt->close();
}

// Close the connection
$conn->close();
