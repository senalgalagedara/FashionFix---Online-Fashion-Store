<?php
include('config.php');

if (isset($_GET['user_Id'])) {
    $user_Id = $_GET['user_Id'];

    
    $sql_delete = "DELETE FROM order_details WHERE user_Id = '$user_Id'";

    if ($conn->query($sql_delete) === TRUE) {
        echo "Record deleted successfully.";
        header("Location: Driver_Order.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID provided to delete.";
    header("Location: Driver_Order.php");
}
?>


