<?php
// Database connection parameters
include 'config.php';

// Check if ID is set in POST request
if (isset($_POST['id'])) {
    $id = intval($_POST['id']); // Convert ID to an integer to prevent SQL injection

    // SQL query to delete the delivery record
    $sql = "DELETE FROM delivery WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // If deletion is successful, redirect to DeliveryDetails.php with a success message
        echo "<script>
                alert('Deleted successfully');
                window.location.href = 'DeliveryDetails.php';
              </script>";
    } else {
        // If deletion fails, show an error
        echo "<script>
                alert('Error deleting: " . $conn->error . "');
                window.location.href = 'DeliveryDetails.php';
              </script>";
    }
} else {
    // If no ID is provided, redirect to DeliveryDetails.php
    echo "<script>
            alert('No ID provided');
            window.location.href = 'DeliveryDetails.php';
          </script>";
}

// Close the connection
$conn->close();
?>
